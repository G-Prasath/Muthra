<!-- ========== Main Script ============  -->
<script defer src="./js/script.js"></script>

<!-- ================== AOS Initialization ================== -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
    });
</script>


<!-- ======================== Language Selector Script ======================== -->
<script defer>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const langSelect = document.getElementById('customLangSelect');

        langSelect.addEventListener('change', function () {
            const selectedLang = this.value;

            const googleSelect = document.querySelector('select.goog-te-combo');
            if (googleSelect) {
                googleSelect.value = selectedLang;
                googleSelect.dispatchEvent(new Event('change'));
            }
        });
    });
</script>
<script defer type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>