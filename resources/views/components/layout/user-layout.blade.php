<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Astra Services">
    <meta name="description" content="Astra Services Website">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }
    </style>

</head>

<body class="antialiased bg-white">
    <section class="bg-primary text-white py-2 flex flex-col justify-evenly md:flex-row">
        <p><a class="flex" href="mailto:sth@sth.com"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACJklEQVR4nO3YS6hNcRTH8b/3q9xEiJBuXQYMGEhJkVJSklJKMVB3amh0S3dkamggJWWiZGLAgJQUSSYMiAGRR97v10f7Wrd2p3PuOffcfZxH+1t7ss9vrfX/9T/rv/faKZWUlJSUtAM9QtJrRlKXomeNoD91GeivZuQ9dqcuATvwppqRjD84hsmpQ8EkHMHvqs2OodyPF9CXOgz0xdrEWoeqNnvFdj3AmtQhYBXuVbZBzVMLy3Erbn/E3rY6SCNr2oV3saa7+YNpzOMXM3Eq97c7gWltMDAlejbr3YyzmFOhqW0kJxrEj5BcxaL/aGI+LkXtn1mD19DVNxLCzXgesifY0FIHaaTmOjyKmq+wbQxtY0ZCvBQ3QvoNh1riII3U2o/PUes2VtTRN24kAmbgeEXfTC/QwNToh1FOY1YDceMzkgs8gC8Rdh1LCjCxEFdyOz44jtjmjETwejyO0JfY2pSDf7k24VnkeoqN44xv3kgkWIDL9U6VOjmyU/F75LiGxU3kmJiRGuf8GcxuIC57Tp0s4jmlCCO5ZPvwKVLdwcoxtMtwM7RfcXCCtYsdrLAa9yPda2yvotmCF6F5iLUF1C1+QsRcnI+Uv3A0Gwni1ftw9FLGRcwrqGZrRt1Y+HCub87FJe4NFznvaJWRXIGdeDuaHx+wpwV1Wv/xAQMxEmTXQItq9OhXlNSlKI10GMod6TCUO9Jh6Nkd6XaSHiGVlJSUlKQ28BeJl84fDKCHpgAAAABJRU5ErkJggg==" class="w-4 mt-1"> &nbsp;&nbsp;<span class=" underline "> admin@astrasupportservices.com.au</span></a></p>
        <p><a class="flex" href="tel:+4733378901"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADh0lEQVR4nO2ZS0hVURSGt70Mo5TK0rQig0ZChYM0aVBEkygIqSARUxKFXsNoLI4qjMJKqEnNKjIregyiaGAPQRMiegx6UBFUWlloD/ti4Tq4Mc+559TxtoX7D+/99z7/Pnuvtf69jjEppPD/AKwH2oF+oAsoMWMJwCSgiT/RA+SZsQAgE7iuwvuAHcBMoFV/u2xcB5AD3FfBr4GiYf+91/+qjasApgEdKvQhMH8ETrn+/xGYZ1wDkA7cUpEPgBkB3BZnjxjQoOJeAPkJuHLEPii/0rgEoFuFrQzJr1C+jMs1roDBOiHIijDmko5pMa4AeKqiCiOMydegF2w2LoChAC6POK5Gxz02LoDBoic4GXGcFErBTyBt9BSGBLAQ+AV8BqZGGLdVF9JuXAFDtqQuJH8y8Ny5NAxs8s47MCEEf6/yO4FxxhUA49WaCGoTcGcBn5S72rgGoEzFvQEyAnjNyms1LgJIA+6qyH0BsdGrnG3GVQBLge/AALDCh7PLumgtMK4CqLcCP8Nn5y4q517QMXThqtulQpt8OFlWcjgvycK4CGCJXnUFVQGF9J1ymp2o7iNBFqAiZUHLfDglVvA3GlcBHLJS8ogdFGCVtXsHjIsAJgI3VGSbX2AD6zTbCRqMiwCygWcq8ookAx/eRmsxjU7GDLAIeKsiT/tlKd0Z75gdczKbAYu1CAqO+71xjZleKzVn+Hi7KjWdA8ATMa5JWYgKWA58SRTYQLGVmtvtPpkYTatODcdZYHayFrMG+OYtJmBnCqyi2a1XY88RoHFXqTfNGstRS0dzS7IWs8FazImAmBEHcGHYWxfBe8SADuPO1WTiQXoJOcnaGe+YnQnIZuLNdmrcHJX7TIJ5q61YlGZgxagtwnpoqfXQqwnuMekR5s2zemfokZwTm/AAX+al5ttxdh8ZjCGvE9rjZ5XirjNeM+JVnA8Ecq0k0RnXvIkcwE19YL+fa/7LuafrvF/jmjOMNztsne0jcVy8gN06X1s8SsM/uMpqjkvVLv2HuYqtVL82XqXhk4BXwcWG7AemRJyjwEokB0dPbbhrs/QAflj3mtqQTcBs4JGOuybHNjmqg0UVAXes2JHGRp1fr5nBKu/Zm44oPelRh1b4Musto43zU/qhtVA/j4t7fuml26SZyKiQYyUfh7RxLl8B/CCpPNOMBWgwbwfOaXbrU/dbH8XSpJCCiRe/AQGfCXGn/vU8AAAAAElFTkSuQmCC" class="w-4 mt-1">&nbsp;<span class=" underline">+47 333 78 901</span></a></p>
    </section>

    <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 shadow-lg lg:h-24 sticky top-0 z-40">

        <section class="flex-1 flex justify-between items-center">
            <a href="#">
                <img src="/images/logo.jpeg" alt="Astra Services" class="max-w-[12em]">
            </a>
        </section>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <section class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav id="primary-navigation" aria-label="primary-navigation">
                <ul class="lg:flex items-center justify-between text-lg text-primary pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="{{route('home')}}">Home</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="{{route('about-us')}}">About Us</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="">Services</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="{{route('ndis')}}">NDIS</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="{{route('contact-us')}}">Contacts</a></li>
                </ul>
            </nav>
        </section>
    </header>

    <main class="flex flex-col space-y-10 justify-center">
        {{$slot}}
    </main>
    <footer class="flex flex-col space-y-10 justify-center m-10">
        <nav class="flex justify-center flex-wrap gap-6 text-gray-500 font-medium" aria-label="secondary-navigation">
            <a class="hover:text-gray-900" href="#">Home</a>
            <a class="hover:text-gray-900" href="#">About</a>
            <a class="hover:text-gray-900" href="#">Services</a>
            <a class="hover:text-gray-900" href="#">NDIS</a>
            <a class="hover:text-gray-900" href="#">Contact</a>
            <a class="hover:text-gray-900" href="#">Privacy Policy</a>
        </nav>

        <section class="flex justify-center space-x-5">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" />
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
            </a>
            <a href="https://messenger.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" />
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/twitter.png" />
            </a>
        </section>
        <p class="text-center text-gray-700 font-medium">Copyright &copy; Astra Support Services <span class="nowrap">All Rights Reserved.</span></p>
    </footer>

</body>

</html>