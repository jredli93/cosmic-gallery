<section id="header" class="header">
    @include('utils.menu')
    <div class="cta">
        <h1 class="cta-heading">Cosmic Gallery</h1>
        <h1 class="cta-subheading">tattoo studio</h1>
        <div class="est-wrap">
            <hr class="cta-line">
            <span class="cta-year">EST. 2021</span>
            <hr class="cta-line">
        </div>
        <a href="{{ URL::route('tattoo') }}"class="cta-btn">Book Appointment</a>
    </div>