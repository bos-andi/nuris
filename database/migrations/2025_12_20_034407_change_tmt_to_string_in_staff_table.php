<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Change column type from date to string first (using raw SQL to avoid validation issues)
        DB::statement("ALTER TABLE staff MODIFY COLUMN tmt VARCHAR(10) NULL");
        
        // Now fix the data - convert dates to year strings
        $staffRecords = DB::table('staff')->whereNotNull('tmt')->get();
        
        foreach ($staffRecords as $staff) {
            $tmtValue = $staff->tmt;
            $year = null;
            
            // Try to extract year from the date value
            try {
                // If it's already a valid date string (YYYY-MM-DD)
                if (is_string($tmtValue) && preg_match('/^(\d{4})-\d{2}-\d{2}/', $tmtValue, $matches)) {
                    $year = $matches[1];
                } elseif (is_string($tmtValue) && preg_match('/^\d{4}$/', $tmtValue)) {
                    // Already a year string
                    $year = $tmtValue;
                } elseif (is_string($tmtValue)) {
                    // Try to parse as date
                    $timestamp = strtotime($tmtValue);
                    if ($timestamp !== false) {
                        $parsedYear = date('Y', $timestamp);
                        if ($parsedYear > 1900 && $parsedYear < 2100) {
                            $year = $parsedYear;
                        }
                    }
                }
            } catch (\Exception $e) {
                // If parsing fails, set to null
                $year = null;
            }
            
            // Update the record
            if ($year !== null) {
                DB::table('staff')->where('id', $staff->id)->update(['tmt' => $year]);
            } else {
                // Set invalid dates to null
                DB::table('staff')->where('id', $staff->id)->update(['tmt' => null]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Change column type back to date
        Schema::table('staff', function (Blueprint $table) {
            $table->date('tmt')->nullable()->change();
        });
    }
};
