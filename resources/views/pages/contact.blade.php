<x-app-layout>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" type="text/css" href="stylenew.css">

    <section class="contact-us">
        <div class="yaztec-contact-form">
            <h1>Contact<span>Us!</span></h1>
            <div class="container">
                <h2 class="links">Be part of the journey</h2>
                <ul class="icons">
                    <li><a ><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li><a ><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a ><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a ><ion-icon name="logo-twitter"></ion-icon></a></li>
                </ul>
            </div>


            <form action="">
                <input type="" placeholder="Name" required>
                <input type="email" name="email" id=""placeholder= "E-mail" required>
                <input type="" placeholder="Subject"required>
                <textarea name="" id="" cols="20" rows="15"placeholder="Message"required></textarea>
                 <x-primary-button>Submit</x-primary-button>

            </form>
        </div>

        <div class="yaztec-contact-img">
            <img src="{{URL::asset('/image/YazTec.png')}}">
        </div>
        </div>
    </section>

</x-app-layout>
