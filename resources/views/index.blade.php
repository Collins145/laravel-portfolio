@extends('layouts.site')
@section('content')
    <section id="intro" class="py-20" style="height: 80vh;">
        <div class="max-w-6xl mx-auto">
            <div class="space-y-8 px-10 sm:px-0">
                <h3 class="text-xl text-green">Hi, my name is</h3>
                <h1 class="text-6xl font-bold text-light-gray">Collins Omondi.</h1>
                <h1 class="text-5xl font-bold">I build things for the web.</h1>
                <p class="text-lg leading-relaxed pb-10">
                    I'm a Web-developer based in Nairobi who specializes in building (and occasionally designing) exceptional digital experiences. <br>
                    I advance technology by contributing to open source
                    Currently, I'm a developer at  <a href="https://snobole.com/" class="text-green" target="_blank">Snobole</a>  focused on building accessible, <br> human-centered products.
                </p>
                <a href="#collinsomondi825@gmail.com"><span class="border border-green rounded px-4 py-3 text-green">Get In Touch</span></a>
            </div>
        </div>
    </section>
    <section id="about" class="py-40">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 px-10 sm:px-0 justify-center">
                <div>
                        <h1 class="pb-6"> <span class="text-green mr-2 text-xl">01.</span><span class="text-light-gray font-bold text-3xl">About Me</span></h1>
                    <div>
                        <p class="space-y-4 text-lg">
                            Hello ! I'm Omondi Collins. I design, develop and deploy websites for clients. <br>
                            I write client-facing code that consume web services. <br>
                            Here's a few technologies I've been working with recently:
                        </p>
                        <p>
                            <ul class="text-lg space-y-2">
                                <li><span class="text-green mr-2">&#10148;</span><span>HTML & Tailwind CSS</span></li>
                                <li><span class="text-green mr-2">&#10148;</span><span>Javascript & AlpineJS</span></li>
                                <li><span class="text-green mr-2">&#10148;</span><span>ReactJS</span></li>
                                <li><span class="text-green mr-2">&#10148;</span><span>Git bash</span></li>
                                <li><span class="text-green mr-2">&#10148;</span><span>Git & Github</span></li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="w-full flex items-center sm:justify-center mt-10">
                    <div class="w-1/2 flex justify-center">
                        <div class="border-2 border-green rounded">
                            <img src="{{url('images/collo.jpg')}}" alt="collo" class="w-full h-auto -mt-8 -ml-6 mb-8 mr-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experience" class="py-20">
        <div class="max-w-6xl mx-auto">
            <h1 class="pb-6 px-10 sm:px-0"> <span class="text-green mr-2 text-xl">02.</span><span class="text-light-gray text-3xl font-bold">Experience</span></h1>
            <div class="flex space-x-10 px-10 sm:px-0">
                <div>
                    <a href="" class="px-2 py-4 border-l border-green text-green">Snobole</a>
                </div>
                <div>
                    <h1 class="text-lg text-light-gray font-bold">Web-developer intern<span class="text-green"> @ <a href="https://snobole.com/" target="_blank">Snobole software</a></span></h1>
                    <p>February 2021 - Present</p>
                    <p>
                    <ul class="text-lg">
                        <li><span class="text-green mr-2">&#10148;</span>Diagnosing and fixing bugs<span></span></li>
                        <li><span class="text-green mr-2">&#10148;</span>Write modern, performant, maintainable code for a diverse array of client and internal projects<span></span></li>
                        <li><span class="text-green mr-2">&#10148;</span>Scoping out and developing new features in line with a specification and to a deadline<span></span></li>
                        <li><span class="text-green mr-2">&#10148;</span><span>Work with a variety of developer tools, frameworks (Alpine.js) and Version Control Systems such as Git & Github, Git bash, <br> GIMP design tool</span></li>
                        <li><span class="text-green mr-2">&#10148;</span><span>Communicate with multi-disciplinary teams of engineers, designers, producers, and clients on a daily basis</span></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="py-20">
        <div class="max-w-6xl mx-auto">
            <h1 class="pb-6 px-10 sm:px-0"> <span class="text-green mr-2">03.</span><span class="font-bold text-light-gray text-xl">Portfolio</span></h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 px-10 sm:px-0">
                <a href="https://collins145.github.io/fiverr-web-clone/" target="_blank"><img class="sm:relative mb-20" src="{{url('images/Screenshot (24).png')}}" alt="fiverr-web-clone"></a>
                <div class="text-right">
                    <h4 class="text-green text-lg">Project 1</h4>
                    <h1 class="text-light-gray hover:text-green font-bold text-2xl pb-8">Fiverr-web-clone</h1>
                    <p class="bg-blue-base rounded p-6 shadow-xl ml-0 sm:ml-16">
                       <span class="text-deep-gray text-md leading-relaxed">
                            Your one stop site for hiring tech talent and software engineers. <br>
                            Find the perfect freelance service for your business.
                       </span>
                    </p>
                </div>
                <div class=" text-left mt-10">
                    <h4 class="text-green text-lg">Project 2</h4>
                    <h1 class="text-light-gray hover:text-green font-bold text-2xl pb-8">Bolt-tailwind-project</h1>
                    <p class="bg-blue-base rounded p-6 shadow-xl ml-0">
                        <span class="text-deep-gray text-md leading-relaxed">
                            Bolt is a transportation app used for taking fast and affordable e-scooter rides. <br>
                            Skip the rush hour hassle and public transport headache, get there quickly, safely and conveniently on a Bolt Scooter.
                        </span>
                    </p>
                </div>
                <a href="https://collins145.github.io/tailwind-boltclone/" target="_blank"><img class="" src="{{url('images/Screenshot (25).png')}}" alt="bolt-clone"></a>
            </div>
        </div>
    </section>
    <section id="contact" class="py-20">
        <div class="mx-auto">
            <div class="text-center">
                <h3 class="text-green"><span class="mr-2">04.</span><span class="text-lg">What's Next</span></h3>
                <h1 class="text-4xl text-light-gray font-bold pb-4">Get in Touch</h1>
                <p class="pb-8">
                    In need of a Website , Contact me below for a booking. <br>
                    Feel free to say hi or if you have any question, my inbox is open ! : )
                </p>
                <a href="tel:+254795315719"><span class="border border-green rounded py-2 px-4 text-green">Contact Collins</span></a>
            </div>
        </div>
    </section>
@endsection
