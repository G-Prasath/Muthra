<div class="fixed right-3 bottom-5 pb-4 flex flex-col gap-3 z-50">

    <a href="https://api.whatsapp.com/send?phone=337776655" target="_blank" rel="noopener noreferrer"
        class="flex items-center justify-center w-11 h-11 xs:w-10 xs:h-10 bg-green-500 text-white rounded-full shadow-lg transition-transform hover:scale-110">
        <img src="./img/whatsapp.png" alt="whatsapp">
    </a>

    <a href="mailto:contat@exaple.com"
        class="flex items-center justify-center w-10 h-10 xs:w-10 xs:h-10 bg-blue-600 text-white rounded-full shadow-lg transition-transform hover:scale-110">
        <img src="./img/call.png" alt="whatsapp">
    </a>

    <a href="javascript:;" id="openModalBtn" target="_blank" rel="noopener noreferrer"
        class="flex items-center justify-center w-11 h-11 xs:w-10 xs:h-10 text-white rounded-full shadow-lg transition-transform hover:scale-110">
        <img src="./img/info.png" alt="whatsapp">
    </a>
</div>


<!-- Modal -->
<div id="modalBox" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden max-md:p-4">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-96 max-w-full relative">
        <button id="closeModalBtn"
            class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-2xl transition-colors">&times;</button>
        <h2 class="text-2xl font-extrabold mb-6 text-center text-[#f2bd3b]">Enquiry Quote</h2>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1" for="name">Name</label>
                <input id="name" type="text" placeholder="Your Name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
                    required>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1" for="email">Email</label>
                <input id="email" type="email" placeholder="Your Email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
                    required>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1" for="phone">Phone</label>
                <input id="phone" type="tel" placeholder="Your Phone"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition" required>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1" for="message">Message</label>
                <textarea id="message" placeholder="Your Message" rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition resize-none"
                    ></textarea>
            </div>
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-600 to-blue-400 text-white font-bold py-2 rounded-lg shadow hover:from-blue-700 hover:to-blue-500 transition">Send
                Message</button>
        </form>
    </div>
</div>


<script>
    // filepath: c:\xampp\htdocs\Muthra\_templates\floating.php
    const openModalBtn = document.getElementById('openModalBtn');
    const modalBox = document.getElementById('modalBox');
    const closeModalBtn = document.getElementById('closeModalBtn');

    openModalBtn.addEventListener('click', function (e) {
        e.preventDefault();
        modalBox.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', function () {
        modalBox.classList.add('hidden');
    });

    // Close modal when clicking outside the modal content
    modalBox.addEventListener('click', function (e) {
        if (e.target === modalBox) {
            modalBox.classList.add('hidden');
        }
    });
</script>