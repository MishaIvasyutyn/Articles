<template>
    <footer class="bg-gray-800 mt-36 fixed inset-x-0 bottom-0" >
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <ul class="flex flex-col md:flex-row items-center">
                    <li>
                        <a href="#" class="text-gray-100">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="text-gray-100">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="text-gray-100">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-line
                                 join="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="text-gray-400 text-base md:text-xl md:ml-6">© 2020 Twitter</p>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "FooterComponent",

    mounted() {
        let count = 0;
        let footer = document.querySelector('footer');
        footer.addEventListener('click', () => {
            let color = '#' + Math.floor(Math.random() * 16777215).toString(16);
            count++;
            footer.style.background = color;
            let audio = new Audio('https://s3.amazonaws.com/freecodecamp/simonSound3.mp3');
            audio.play();
            if (count === 5) {
                footer.style.background = 'rgb(31, 41, 55)';
                count = 0;
            }
        });
    }
}
</script>

<style scoped>
/*on mouse click change footer color*/

</style>
