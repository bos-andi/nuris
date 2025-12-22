@extends('admin.layouts.app')

@section('title', 'Edit Jadwal')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Jadwal Kegiatan Yaumiyah</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit jadwal: {{ $schedule->activity }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.schedules.update', $schedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="type">Tipe Jadwal *</label>
                <select id="type" name="type" class="form-input w-full" required onchange="toggleDayField()">
                    <option value="daily" {{ old('type', $schedule->type) == 'daily' ? 'selected' : '' }}>Harian</option>
                    <option value="weekly" {{ old('type', $schedule->type) == 'weekly' ? 'selected' : '' }}>Mingguan</option>
                </select>
                @error('type')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4" id="day-field" style="display: {{ old('type', $schedule->type) == 'weekly' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="day">Hari</label>
                <select id="day" name="day" class="form-input w-full">
                    <option value="">Pilih Hari</option>
                    <option value="Senin" {{ old('day', $schedule->day) == 'Senin' ? 'selected' : '' }}>Senin</option>
                    <option value="Selasa" {{ old('day', $schedule->day) == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                    <option value="Rabu" {{ old('day', $schedule->day) == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                    <option value="Kamis" {{ old('day', $schedule->day) == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                    <option value="Jumat" {{ old('day', $schedule->day) == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                    <option value="Sabtu" {{ old('day', $schedule->day) == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                    <option value="Ahad" {{ old('day', $schedule->day) == 'Ahad' ? 'selected' : '' }}>Ahad</option>
                </select>
                <p class="text-xs text-gray-500 mt-1">Hanya untuk jadwal mingguan</p>
                @error('day')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="time">Waktu *</label>
                <input type="text" id="time" name="time" class="form-input w-full" value="{{ old('time', $schedule->time) }}" required placeholder="Contoh: 03.00-04.00, 19.30-20.30">
                <p class="text-xs text-gray-500 mt-1">Format: HH.MM-HH.MM (contoh: 03.00-04.00)</p>
                @error('time')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="activity">Kegiatan *</label>
                <input type="text" id="activity" name="activity" class="form-input w-full" value="{{ old('activity', $schedule->activity) }}" required placeholder="Contoh: Qiyamul Lail dan Persiapan Shalat Shubuh Berjama'ah">
                @error('activity')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="notes">Keterangan</label>
                <textarea id="notes" name="notes" class="form-input w-full" rows="2" placeholder="Keterangan tambahan (opsional)">{{ old('notes', $schedule->notes) }}</textarea>
                @error('notes')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $schedule->order) }}" min="0">
                    <p class="text-xs text-gray-500 mt-1">Urutan tampil (angka lebih kecil tampil lebih dulu)</p>
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $schedule->is_active) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Aktifkan</span>
                    </label>
                    <p class="text-xs text-gray-500 mt-1">Jadwal yang tidak aktif tidak akan ditampilkan</p>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update Jadwal
                </button>
                <a href="{{ route('admin.schedules') }}" class="btn bg-secondary text-white">
                    <i class="mgc_close_line me-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function toggleDayField() {
    const type = document.getElementById('type').value;
    const dayField = document.getElementById('day-field');
    const dayInput = document.getElementById('day');
    
    if (type === 'weekly') {
        dayField.style.display = 'block';
        dayInput.setAttribute('required', 'required');
    } else {
        dayField.style.display = 'none';
        dayInput.removeAttribute('required');
    }
}
</script>
@endsection

