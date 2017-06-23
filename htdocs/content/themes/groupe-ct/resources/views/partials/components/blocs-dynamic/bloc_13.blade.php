<!-- Block 13 - Locations Block -->
<div class="contact-main-container default-padding default-width">
    @foreach($block->get_field('bloc_13_cities') as $city)
   {{-- BLUE BAR WITH TITLE START --}}
   <div class="contact-header">
       <h2>{{ $city['bloc_13_city_name'] }}</h2>
   </div>
   {{-- BLUE BAR WITH TITLE END --}}
   <div class="contact-info-main-container">
       @foreach($city['block_13_office'] as $office)
       {{-- CONTACT INFO START --}}
       <div class="contact-info-container">
           <h3 class="contact-info-title">{{ $office['block_13_office_title'] }}</h3>
           <a class="info contact-info-adress" href="{{ $office['block_13_office_gmap_link'] }}" target="_blank">{!! $office['block_13_office_address'] !!}</a>
           <a class="info contact-info-phone01" href="tel:"><span>T:</span> {{ $office['block_13_office_phone'] }}</a>
           <p class="info contact-info-fax"><span>F:</span> {{ $office['block_13_office_fax'] }}</p>
           <a class="info contact-info-phone02" href="tel:"><span>T:</span> {{ $office['block_13_office_toll_free'] }}</a>
           <a class="info contact-info-email" href="mailto:{{ $office['block_13_office_email'] }}">{{ $office['block_13_office_email'] }}</a>
       </div>
       {{-- CONTACT INFO END --}}
       @endforeach
   </div>
    @endforeach
</div>
