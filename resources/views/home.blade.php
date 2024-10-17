@extends('template.layout')

<div class="title">
    <h2>SIMULADOR</h2>
</div>
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <img name="index" src="storage/images/index.png" data-toggle="modal" id="index" usemap="#m_index" alt="" />
        <map name="m_index" id="m_index">
            <area shape="poly" coords="0,57,70,57,70,106,0,106,0,57" href="{{route('index')}}" target="_self" alt="" />
            <area shape="poly" coords="0,114,70,114,70,160,0,160,0,114" href="sales" data-toggle="modal" data-target="#sales"  />
            <area shape="poly" coords="0,167,70,167,70,213,0,213,0,167" href="register" data-toggle="modal" data-target="#register"  />

            <area shape="poly" coords="119,168,426,168,426,270,119,270,119,168" href="sales" data-toggle="modal" data-target="#sale_3"/>
            {{--

            <area shape="poly" coords="0,223,70,223,70,269,0,269,0,223" href="customers" target="_self" alt="" />
            <area shape="poly" coords="0,278,70,278,70,324,0,324,0,278" href="providers" target="_self" alt="" />
            <area shape="poly" coords="0,332,70,332,70,386,0,386,0,332" href="quick-quotes" target="_self" alt="" />
            <area shape="poly" coords="0,396,70,396,70,442,0,442,0,396" href="products" target="_self" alt="" />
            <area shape="poly" coords="0,451,70,451,70,497,0,497,0,451" href="services" target="_self" alt="" />
            <area shape="poly" coords="0,560,70,560,70,606,0,606,0,560" href="financial" target="_self" alt="" />
            <area shape="poly" coords="0,504,70,504,70,550,0,550,0,504" href="reports" target="_self" alt="" />
            <area shape="poly" coords="0,613,70,613,70,664,0,664,0,613" href="invoices" data-toggle="modal" data-target="#invo"  />

            <area shape="poly" coords="1078,509,1385,509,1385,613,1078,613,1078,509" href="ticket-order" target="_self" alt="" />
            <area shape="poly" coords="760,508,1067,508,1067,612,760,612,760,508" href="ticket-sales" target="_self" alt="" />
            <area shape="poly" coords="438,508,746,508,746,612,438,612,438,508" href="return-forecast-week" target="_self" alt="" />
            <area shape="poly" coords="117,508,424,508,424,612,117,612,117,508" href="return-forecast" target="_self" alt="" />
            <area shape="poly" coords="1080,401,1387,401,1387,504,1080,504,1080,401" href="birthdays-week" target="_self" alt="" />
            <area shape="poly" coords="761,401,1068,401,1068,504,761,504,761,401" href="birthdays" target="_self" alt="" />
            <area shape="poly" coords="439,401,746,401,746,504,439,504,439,401" href="schedules-week" target="_self" alt="" />
            <area shape="poly" coords="119,401,426,401,426,504,119,504,119,401" href="schedules" target="_self" alt="" />
            <area shape="poly" coords="1080,283,1387,283,1387,386,1080,386,1080,283" href="bills-to-pay-old" target="_self" alt="" />
            <area shape="poly" coords="761,283,1068,283,1068,386,761,386,761,283" href="bills-to-pay" target="_self" alt="" />
            <area shape="poly" coords="439,283,746,283,746,386,439,386,439,283" href="bills-to-receive-old" target="_self" alt="" />
            <area shape="poly" coords="119,283,426,283,426,386,119,386,119,283" href="bills-to-receive" target="_self" alt="" />
            <area shape="poly" coords="761,168,1068,168,1068,270,761,270,761,168" href="products" target="_self" alt="" />
            <area shape="poly" coords="1080,168,1387,168,1387,270,1080,270,1080,168" href="services" target="_self" alt="" />
            <area shape="poly" coords="439,168,746,168,746,270,439,270,439,168" href="customers" target="_self" alt="" />
            <area shape="poly" coords="119,168,426,168,426,270,119,270,119,168" href="sales" target="_self" alt="" />
             --}}





            </map>
    </div>

</div>
@include('registrations.register')
@include('sales.sales')
<div>
    @include('index')
</div>
