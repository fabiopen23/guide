

<div class="modal fade" id="register">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
                    <img name="register" src="storage/images/register.png" width="1150px"  height="680px"  id="register" usemap="#m_register" alt=""/>
                    <map name="m_register" id="m_register">
                    <area shape="poly" coords="79,182,240,182,240,213,79,213,79,182" href="cad_prod" data-toggle="modal"  data-target="#cad_prod" alt="" />
                    <area shape="poly" coords="79,224,240,224,240,255,79,255,79,224" href="cad_invo" data-toggle="modal"  data-target="#cad_invo" alt="" />
                    <area shape="poly" coords="79,266,240,266,240,297,79,297,79,266" href="cad_sale" data-toggle="modal"  data-target="#cad_sale" alt="" />
                    <area shape="poly" coords="79,310,240,310,240,341,79,341,79,310" href="cad_finan" data-toggle="modal"  data-target="#cad_finan" alt="" />
                    <area shape="poly" coords="79,353,272,353,272,384,79,384,79,353" href="cad_check" data-toggle="modal"  data-target="#cad_check" alt="" />
                    </map>
        </div>
    </div>

</div>
@include('registrations.products')
@include('registrations.invo')
@include('registrations.sale')
@include('registrations.finan')
@include('registrations.check')



