

<div class="col-md-12">
    <div class="modal fade" id="cad_invo">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <img name="cad_invo" src="storage/images/cad_invoices/cad_invo.png" width="1150px"  height="680px" id="cad_invo" usemap="#m_cad_invo" alt="" />
                  <map name="m_cad_invo" id="m_cad_invo">
                  <area shape="rect" coords="331,110,586,141" href="cad_cfop_4" data-toggle="modal" data-target="#cad_cfop_4" alt=""/>
                  <area shape="rect" coords="331,149,586,180" href="cad_ncm_4" data-toggle="modal" data-target="#cad_ncm_4" alt=""/>
                  <area shape="rect" coords="331,187,586,218" href="cad_text_4" data-toggle="modal" data-target="#cad_text_4" alt=""/>
                  <area shape="rect" coords="331,225,586,256" href="cad_shipping_4" data-toggle="modal" data-target="#cad_shipping_4" alt=""/>
                  <area shape="rect" coords="331,263,586,294" href="cad_tax_4" data-toggle="modal" data-target="#cad_tax_4" alt=""/>
                  <area shape="rect" coords="331,301,586,332" href="cad_cnae_4" data-toggle="modal" data-target="#cad_cnae_4" alt=""/>
                  <area shape="rect" coords="331,340,586,371" href="cad_intermediary_4" data-toggle="modal" data-target="#cad_intermediary_4" alt=""/>
                  </map>
            </div>
        </div>
    </div>
    @include('registrations.cfop')
    @include('registrations.ncm')
    @include('registrations.text')
    @include('registrations.shipping')
    @include('registrations.tax')
    @include('registrations.cnae')
    @include('registrations.intermediary')
</div>

