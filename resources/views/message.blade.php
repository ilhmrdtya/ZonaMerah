<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message | Barterin</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        dark: '#1F2937',
                    },
                    boxShadow: {
                        'message': '0 2px 4px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        /* Message animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .message-fade {
            animation: fadeIn 0.3s ease-out;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- navbar -->
    @include('navbar')

    <!-- Message Section -->
    <div class="message-container mt-24 min-h-[calc(100vh-8rem)] mx-auto max-w-4xl p-4 md:p-6">
        <!-- Chat Header -->
        <div class="bg-white rounded-t-xl shadow-sm p-4 border-b border-gray-200">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                    <i class="fas fa-store text-primary"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-dark">Toko Budi</h3>
                    <p class="text-xs text-gray-500">Aktif 5 menit lalu</p>
                </div>
            </div>
        </div>

        <!-- Chat Messages -->
        <div class="bg-white p-4 space-y-4 max-h-[60vh] overflow-y-auto">
            <!-- Date Separator -->
            <div class="flex justify-center">
                <span class="bg-gray-100 text-xs text-gray-500 px-2 py-1 rounded-full">Hari Ini</span>
            </div>

            <!-- Received Message -->
            <div class="flex gap-2 message-fade">
                <div class="w-8 h-8 rounded-full bg-gray-200 flex-shrink-0"></div>
                <div>
                    <div class="bg-gray-100 p-3 rounded-2xl rounded-tl-none shadow-message max-w-xs md:max-w-md">
                        <p class="text-gray-800">Halo, saya tertarik dengan produk Anda. Apakah masih tersedia?</p>
                        <div class="flex items-center justify-end gap-1 mt-1">
                            <span class="text-xs text-gray-500">10:30</span>
                            <i class="fas fa-check-double text-xs text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sent Message -->
            <div class="flex justify-end message-fade">
                <div class="flex flex-col items-end">
                    <div class="bg-primary text-white p-3 rounded-2xl rounded-tr-none shadow-message max-w-xs md:max-w-md">
                        <p>Ya, produk masih tersedia. Silakan dipesan!</p>
                        <div class="flex items-center justify-end gap-1 mt-1">
                            <span class="text-xs text-blue-100">10:32</span>
                            <i class="fas fa-check-double text-xs text-blue-200"></i>
                        </div>
                    </div>
                    <!-- Seen Indicator -->
                    <div class="flex items-center gap-1 mt-1">
                        <span class="text-xs text-gray-400">Dilihat</span>
                        <div class="flex -space-x-1">
                            <div class="w-4 h-4 rounded-full border border-white bg-secondary"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card in Chat -->
            <div class="flex justify-center message-fade">
                <div class="border border-gray-200 rounded-lg p-3 max-w-xs bg-gray-50">
                    <div class="flex gap-3">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium text-sm">Kamera Mirrorless</h4>
                            <p class="text-xs text-gray-500">Kondisi 90%</p>
                            <p class="text-sm font-semibold text-primary mt-1">Rp 2.500.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Input -->
        <div class="bg-white rounded-b-xl shadow-sm p-4 border-t border-gray-200">
            <form action="#" class="flex items-center gap-2">
                <button type="button" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition">
                    <i class="fas fa-paperclip"></i>
                </button>
                <input type="text" placeholder="Tulis pesan..." class="flex-1 p-3 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                <button type="submit" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-blue-700 transition">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- footer -->
    @include('footer')

    <!-- Typing Indicator Script (Example) -->
    <script>
        // Example: Simulate typing indicator
        function showTyping() {
            const typing = document.createElement('div');
            typing.className = 'flex gap-2 pt-2';
            typing.innerHTML = `
                <div class="w-8 h-8 rounded-full bg-gray-200 flex-shrink-0"></div>
                <div class="flex items-end gap-1">
                    <div class="typing-dot bg-gray-300 w-2 h-2 rounded-full animate-bounce"></div>
                    <div class="typing-dot bg-gray-300 w-2 h-2 rounded-full animate-bounce delay-100"></div>
                    <div class="typing-dot bg-gray-300 w-2 h-2 rounded-full animate-bounce delay-200"></div>
                </div>
            `;
            document.querySelector('.bg-white.p-4').appendChild(typing);
            
            // Remove after 3 seconds (simulate message sent)
            setTimeout(() => {
                typing.remove();
                // Here you would add the actual received message
            }, 3000);
        }

        // Uncomment to test typing indicator
        // showTyping();
    </script>
</body>
</html>