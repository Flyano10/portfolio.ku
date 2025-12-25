@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-blue-900">Contact Messages</h1>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 bg-white border border-blue-200 text-blue-700 px-4 py-2 rounded-lg hover:bg-blue-50 transition-all shadow-sm">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>

        @if ($contacts->isEmpty())
            <div class="bg-blue-50 text-blue-700 px-6 py-4 rounded-xl border border-blue-100 shadow-sm">
                No messages received yet.
            </div>
        @else
            <div class="bg-white border border-blue-100 rounded-2xl shadow-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-blue-600 text-white text-sm uppercase tracking-wide">
                        <tr>
                            <th class="px-6 py-4 text-left">Name</th>
                            <th class="px-6 py-4 text-left">Email</th>
                            <th class="px-6 py-4 text-left">Message</th>
                            <th class="px-6 py-4 text-left">Time</th>
                            <th class="px-6 py-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-50 text-sm text-blue-900">
                        @foreach ($contacts as $contact)
                            <tr class="hover:bg-blue-50/70 transition-colors">
                                <td class="px-6 py-4 font-semibold">{{ $contact->nama }}</td>
                                <td class="px-6 py-4">
                                    <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">{{ $contact->email }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-blue-800">{{ Str::limit($contact->pesan, 80) }}</p>
                                </td>
                                <td class="px-6 py-4 text-blue-500">{{ $contact->created_at->format('d M Y, H:i') }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button" onclick="openMessageModal({{ $contact->id }})" class="px-3 py-1.5 bg-blue-100 text-blue-700 rounded-lg text-xs font-semibold hover:bg-blue-200 transition">
                                            View
                                        </button>
                                        <form action="{{ route('kontak.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1.5 bg-red-500 text-white rounded-lg text-xs font-semibold hover:bg-red-600 transition">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div id="contact-modal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
                <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full mx-4 p-6 border border-blue-100">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-blue-900" id="modal-name">Sender Name</h3>
                            <p class="text-blue-600" id="modal-email">sender@email.com</p>
                            <p class="text-xs text-blue-400" id="modal-time">Time</p>
                        </div>
                        <button onclick="closeMessageModal()" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-times text-lg"></i>
                        </button>
                    </div>
                    <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 text-blue-800 leading-relaxed" id="modal-message">
                        Message content goes here...
                    </div>
                    <div class="mt-6 flex justify-end">
                        <button onclick="closeMessageModal()" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Close
                        </button>
                    </div>
                </div>
            </div>

            <script>
                const messages = @json($contacts->keyBy('id'));

                function openMessageModal(id) {
                    const modal = document.getElementById('contact-modal');
                    const data = messages[id];
                    if (!modal || !data) return;

                    document.getElementById('modal-name').textContent = data.nama;
                    document.getElementById('modal-email').textContent = data.email;
                    document.getElementById('modal-email').setAttribute('href', `mailto:${data.email}`);
                    document.getElementById('modal-time').textContent = new Date(data.created_at).toLocaleString('en-GB');
                    document.getElementById('modal-message').textContent = data.pesan;

                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }

                function closeMessageModal() {
                    const modal = document.getElementById('contact-modal');
                    if (!modal) return;
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            </script>
        @endif
    </div>
@endsection
