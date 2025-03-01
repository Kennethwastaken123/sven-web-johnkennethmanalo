<x-guest-layout>
    <section class="h-screen bg-cover bg-center flex items-center justify-end text-white text-right px-6 md:px-16 sm:px-4"
        style="background-image: url('/images/home/photo1.webp');">
        <div class="bg-opacity-50 p-8 rounded-lg max-w-lg md:max-w-2xl text-center">
            <h1 class="text-4xl md:text-5xl font-bold">We care for your furry little loved ones while</h1>
            <a x-on:click="scrollToSection('schedule-us')" class="mt-6 inline-block bg-white text-gray-900 font-semibold px-10 py-3 rounded-full shadow-lg">Schedule a visit</a>

        </div>
    </section>
    <section class="flex flex-wrap items-center justify-center p-8 md:px-16 h-auto md:h-screen" id="about-us">
        <div class="w-full md:w-1/2 text-center md:text-left px-4">
            <h2 class="text-3xl md:text-4xl font-bold">Expert care for your furry, feathery, or scaley friend</h2>
            <p class="mt-4 text-gray-600">We know how stressful it is to leave your pets at home alone. We're a team of experienced animal caregivers, well connected to local veterinarians. Trust us to love them like our own, and to keep them safe and happy till you're home.</p>
            <a x-on:click="scrollToSection('schedule-us')" class="mt-6 inline-block bg-gray-800 text-white font-semibold px-6 py-3 rounded-full shadow-lg">Schedule a visit</a>
        </div>
        <div class="w-full md:w-1/2 grid grid-cols-2 gap-6 p-4">
            <div class="bg-gray-200 overflow-hidden bg-cover bg-center h-56 relative" style="background-image: url('/images/pet/cat.jpg');">
                <p class="absolute bottom-2 left-4 bg-opacity-50 text-white p-1 rounded">Mittens</p>
            </div>
            <div class="bg-gray-200 overflow-hidden bg-cover bg-center h-56 relative" style="background-image: url('/images/pet/bird.jpg');">
                <p class="absolute bottom-2 left-4 bg-opacity-50 text-white p-1 rounded">Peppy</p>
            </div>
            <div class="bg-gray-200 overflow-hidden bg-cover bg-center h-56 relative" style="background-image: url('/images/pet/dog.jpg');">
                <p class="absolute bottom-2 left-4 bg-opacity-50 text-white p-1 rounded">Balto</p>
            </div>
            <div class="bg-gray-200 overflow-hidden bg-cover bg-center h-56 relative" style="background-image: url('/images/pet/mouse.jpg');">
                <p class="absolute bottom-2 left-4 bg-opacity-50 text-white p-1 rounded">Mocha</p>
            </div>
        </div>
    </section>
    <section class="relative min-h-screen md:h-screen flex flex-col md:flex-row items-stretch text-white">
        <div class="w-full md:w-2/5 flex items-center justify-center px-4 md:px-6 h-full bg-cover bg-center"
            style="background-image: url('/images/home/photo-2.jpg');">
            <div class="relative min-h-screen flex flex-col items-center px-6 py-10">
            <a x-on:click="scrollToSection('logo')" class="flex items-center mb-8 space-x-2 text-lg font-semibold text-white drop-shadow-lg animate-float">
                        <img src="{{ asset('/images/home/logo.jpg') }}" alt="Kenneth Pet Grooming Logo" class="w-12 h-12 object-contain rounded-full animate-float">
                        <span>PAWTASTIC</span>
                    </a>
                <h2 class="text-3xl md:text-4xl font-bold text-center text-white">All services include:</h2>
                <p class="text-base md:text-lg opacity-0 text-center text-white">Book an appointment today and let us pamper your pet.</p>
                <ul class="space-y-2 text-gray-300 list-none text-center mt-4">
                    <li class="relative pl-6 flex items-center">
                        <span class="absolute left-0 top-1/2 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full"></span> A photo update for you along
                    </li>
                    <li class="relative pl-6 flex items-center">
                        <span class="absolute left-0 top-1/2 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full"></span> Notifications of sitter arrival
                    </li>
                    <li class="relative pl-6 flex items-center">
                        <span class="absolute left-0 top-1/2 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full"></span> Treats for your pet
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-1 items-center justify-center w-full p-4 bg-[#F2E7E6]" id="schedule-us">
            <form class="space-y-6 p-6 w-full max-w-2xl"  x-data="contactForm()">
                <h2 class="text-3xl font-bold text-gray-800 text-center">We’ll take your dog for a walk. Just tell us when!</h2>
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="w-full md:w-1/2">
                        <label class="block font-semibold text-gray-700">Frequency</label>
                        <div class="flex space-x-4 mt-2">
                            <label class="w-1/2">
                                <input type="radio" name="frequency" value="recurring" class="hidden peer" x-model="formData.frequency">
                                <span class="block px-6 py-3 bg-white  text-gray-700 rounded-lg w-full text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white peer-checked:font-bold transition">
                                    Recurring
                                </span>
                            </label>
                            <label class="w-1/2">
                                <input type="radio" name="frequency" value="one-time" class="hidden peer" x-model="formData.frequency">
                                <span class="block px-6 py-3 bg-white text-gray-700 rounded-lg w-full text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white peer-checked:font-bold transition">
                                    One time
                                </span>
                            </label>
                        </div>
                        <span x-show="errors.frequency && errors.frequency.length" class="text-red-500" x-text="errors.frequency ? errors.frequency[0] : ''"></span>
                    </div>

                    <div class="w-full md:w-1/2">
                        <label class="block font-semibold text-gray-700">Start date</label>
                        <input type="date" x-model="formData.date" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 text-black" :min="today">
                        <span x-show="errors.date && errors.date.length" class="text-red-500" x-text="errors.date ? errors.date[0] : ''"></span>
                    </div>
                </div>
                <div>
                    <label class="block font-semibold text-gray-700">Days</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-7 gap-2 mt-2">
                        <label class="w-full">
                            <input type="checkbox"  value="mon" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Mon</span>
                        </label>
                        <label class="w-full">
                            <input type="checkbox"  value="tue" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Tue</span>
                        </label>
                        <label class="w-full">
                            <input type="checkbox"  value="wed" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Wed</span>
                        </label>
                        <label class="w-full">
                            <input type="checkbox"  value="thu" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Thu</span>
                        </label>
                        <label class="w-full">
                            <input type="checkbox"  value="fri" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Fri</span>
                        </label>
                        <label class="w-full">
                            <input type="checkbox"  value="sat" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Sat</span>
                        </label>
                        <label class="w-full">
                            <input type="checkbox"  value="sun" class="hidden peer" x-model="days">
                            <span class="block px-4 py-2 bg-white text-gray-700 rounded-lg text-center cursor-pointer peer-checked:bg-gray-600 peer-checked:text-white transition">Sun</span>
                        </label>
                    </div>
                    <span x-show="errors.days && errors.days.length" class="text-red-500" x-text="errors.days ? errors.days[0] : ''"></span>
                </div>
                <div>
                    <label class="block font-semibold text-gray-700">Times</label>
                    <div class="times-container mt-1">
                        <label class="time-option">
                            <input type="checkbox" value="morning" class="hidden peer" x-model="times">
                            <span class="time-label">Morning</span>
                        </label>
                        <label class="time-option">
                            <input type="checkbox" value="afternoon" class="hidden peer" x-model="times">
                            <span class="time-label">Afternoon</span>
                        </label>
                        <label class="time-option">
                            <input type="checkbox" value="evening" class="hidden peer" x-model="times">
                            <span class="time-label">Evening</span>
                        </label>
                    </div>
                    <span x-show="errors.times && errors.times.length" class="text-red-500" x-text="errors.times ? errors.times[0] : ''"></span>
                </div>
                <div>
                    <label class="block font-semibold text-gray-700">Notes for your sitter</label>
                    <textarea class="w-full p-4 text-black mt-1 border border-gray-300 rounded-lg" x-model="formData.notes" placeholder="Route preferences, leash location, treats given, etc."></textarea>

                </div>
                <div class="flex justify-center">
                    <button class="max-w-xs w-full py-3 bg-gray-800 text-white font-bold rounded-full"  @click.prevent="submitData()">Schedule Service</button>
                </div>
            </form>
        </div>
    </section>
    <script >
        function contactForm() {
            return {

                formData: {},
                errors: '',
                days: [],
                times: [],
                today: new Date().toISOString().split('T')[0],

                submitData() {
                    this.formData.days = this.days;

                    this.formData.times = this.times;

                    axios.post("{{ route('schedule.store') }}", this.formData)
                    .then(response => {
                        if(response.data.status == 'success'){
                            toastr.success('Appointment created successfully!', 'Success');
                            setTimeout(() => {
                            window.location.reload();
                            }, 1000);
                        }
                    })
                    .catch(error => {

                        if (error.response && error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        }

                    });

                }
            };
        }

    </script>
</x-guest-layout>
