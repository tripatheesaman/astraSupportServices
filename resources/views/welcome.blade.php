<x-layout.user-layout>
    <section class="bg-primary lg:min-h-[100vh]">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl text-white">Nurturing Independence</h1>
                <p class="mb-6 max-w-2xl font-light text-white lg:mb-8 md:text-lg lg:text-xl ">Guided by Compassion, United in Inclusivity, and Committed to Empowering Lives, Every Step of the Way</p>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    Our Services
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white bg-blue-900 rounded-lg border border-gray-300 hover:bg-secondary focus:ring-4 focus:ring-gray-100">
                    Contact Us
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="/images/hwat.png" alt="mockup">
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h2 class="mb-8 text-2xl font-mono font-extrabold tracking-tight leading-tight text-center text-primary lg:mb-12 md:text-4xl">You’ll be in good company <strong>!</strong></h2>
            <div class="text-justify  sm:text-center text-md md:text-2xl">
                At <span class="text-reddish font-bold"> ASTRA SUPPORT SERVICES </span>, we promote the dignity and self-worth of all of our clients and strive to give them excellent quality of life. To that end, we encourage resident group decision-making through the House Councils, self-determination in activities, socialization, and food preferences.
            </div>
        </div>
    </section>

    @php
    $services = [
    [
    'title'=>'Assistance With Personal Activities',
    'summary'=> 'Under this NDIS support, we enable NDIS participants to live life freely, without stressing out on tedious household tasks that require more than extra effort.',
    'image'=> '/images/wheelchair.jpeg'

    ],

    [
    'title'=>'Assistance In Transport',
    'summary'=> 'As a registered NDIS provider, our goal is to provide you with NDIS services that enhance your wellbeing and allow you to live as independently as possible.',
    'image'=> '/images/disabled-parking.jpeg'

    ],

    [
    'title'=>'Assistance In Daily Task/ Shared Living',
    'summary'=> 'We offer an array of services to participants with disabilities so that they can live independently and participate in the community.',
    'image'=> '/images/daily-life.jpeg'

    ],
    [
    'title'=>'Development Of Life Skills​',
    'summary'=> 'Our team of support workers work closely with the participants to understand their developmental goals, to further help them incorporate the necessary skills in their lives.',
    'image'=> '/images/life-skills.jpeg'

    ],
    [
    'title'=>'Assistance In Household Task',
    'summary'=> 'We believe, that to have a happy and healthy life your surroundings must be clean and safe. Your home is where you must feel safe and relaxed. Our trained care workers are always available for your assistance. ',
    'image'=> '/images/spray-bottle.jpeg'

    ],
    [
    'title'=>'Community Participation',
    'summary'=> 'We arrange several types of active social and community participation for every person who is willing to engage. This holds true for everyone, irrespective of their age bracket. ',
    'image'=> '/images/community-activities.jpeg'

    ],
    [
    'title'=>'Group Centre Activities',
    'summary'=> 'Group and Centre-Based Services enable people with disabilities to participate in community, social, and recreational activities, as well as to develop skills and achieve goals through a combination of one-on-one and group activities. Under this program, we assist our clients to live full and happy life. ',
    'image'=> '/images/group-center.jpeg'

    ],
    [
    'title'=>'Assistance In Managing Life Stages​​​',
    'summary'=> 'Going through a transition is not easy but it does not have to be overwhelming, and you do not have to do it alone. Astra Support Services can help you get through these changes and transitions in a prepared manner, so that whenever the stage comes, you know how to respond. ',
    'image'=> '/images/last-one.jpeg'

    ],
    ]
    @endphp
    <section class="bg-gray-50 ">
        <h2 class="text-center text-primary font-mono  text-4xl lg:text-6xl font-bold my-16">Our Services</h2>


        <section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
            @foreach ($services as $service)
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <a href="{{url('/')}}">
                    <img src="{{ $service['image'] }}" alt="Product" class="h-96 w-72 object-cover rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <p class="text-xl font-mono font-extrabold text-reddish hyphens-auto block capitalize  ">{{ $service['title'] }}</p>
                        <div class="flex items-center text-secondary mt-4 text-justify hyphens-auto">
                            {{$service['summary']}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </section>




    </section>

    <section class="bg-primary">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-white sm:text-lg">
                <h2 class="mb-4 text-2xl font-mono font-extrabold md:text-4xl  text-reddish">We like to preserve your beautiful smile <strong>!</strong></h2>
                <div class="grid grid-cols-2 gap-4 mt-8 md:hidden">
                    <img class="w-full rounded-lg h-5/6" src="/images/smile.jpeg" alt="Astra Support Services">
                    <img class="mt-4 h-72 w-full rounded-lg lg:mt-10" src="/images/ori.jpg" alt="office content 2">
                </div>

                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, consectetur. Incidunt ad ipsa unde facere eos quibusdam consequuntur facilis ducimus dicta odio doloremque, itaque qui sunt quae expedita aspernatur doloribus.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates temporibus vel reiciendis. Consequatur, cum? Ab odit dicta ex sequi accusantium, laborum expedita qui, aliquid autem eos minus corporis voluptatum maxime!</p>
            </div>
            <div class=" md:grid-cols-2 md:gap-4 mt-8 hidden md:grid">
                <img class="w-full rounded-lg h-5/6 hover:scale-105" src="/images/smile.jpeg" alt="Astra Support Services">
                <img class="mt-4 h-96 w-full rounded-lg lg:mt-10 hover:scale-105" src="/images/ori.jpg" alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-gray-50  ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg ">
                <h2 class="mb-4 text-4xl font-mono font-extrabold text-primary text-center">Why Choose Us?</h2>
                <div class="lg:grid lg:grid-cols-2 lg:gap-48 lg:mt-12">
                    <div class=" text-center hidden lg:block min-h-full">
                        <img src=" /images/ethics.jpeg" alt="Astra Support Services" class="min-h-full w-auto border rounded-lg hover:scale-105 ">
                    </div>
                    <div class="grid grid-cols-1 gap-10  rounded-lg">
                        <div class="bg-primary border rounded-xl p-4 duration-100 hover:scale-105">
                            <h2 class="text-reddish font-bold text-2xl text-center my-4 font-mono">We will Listen</h2>
                            <p class="text-white mb-4 text-justify hyphens-auto">A common issue that Participants highlight when switching providers is that they feel unheard regarding the care and service they want.That will never be the case as we Empower Disability Services.</p>
                        </div>
                        <div class="bg-primary border rounded-xl p-4 duration-100 hover:scale-105">
                            <h2 class="text-reddish font-bold text-2xl text-center my-4 font-mono">We will Communicate</h2>
                            <p class="text-white mb-4 text-justify hyphens-auto">A mistake that other providers often make is keeping participants in the dark when issues arise until they are solved. We keep things simple and transparent and will communicate with you regularly.</p>
                        </div>
                        <div class="bg-primary border rounded-xl p-4 duration-100 hover:scale-105">
                            <h2 class="text-reddish font-bold text-2xl text-center my-4 font-mono">We will Involve</h2>
                            <p class="text-white mb-4 text-justify hyphens-auto">The NDIS plan is your plan and as such we will involve you in every decision-making process it involves ensuring that you get the most out of your plan.</p>
                        </div>
                        <div class="bg-primary border rounded-xl p-4 duration-100 hover:scale-105">
                            <h2 class="text-reddish font-bold text-2xl text-center my-4 font-mono">We will Respect</h2>
                            <p class="text-white mb-4 text-justify hyphens-auto">Respect and Integrity are the cornerstones of our foundation as an organisation and every member of our organisation will treat you with the utmost respect. </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


</x-layout.user-layout>