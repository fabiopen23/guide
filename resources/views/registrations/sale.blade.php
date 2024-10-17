<div class="col-md-12">
    <div class="modal fade" id="cad_sale">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <img name="cad_sale" src="storage/images/cad_sales/cad_sale.png" width="1150px"  height="680px" id="cad_sale" usemap="#m_cad_sale" alt="" />
                  <map name="m_cad_sale" id="m_cad_sale">
                  <area shape="rect" coords="331,115,586,146" href="cad_conditions_4" data-toggle="modal" data-target="#cad_conditions_4" alt=""/>
                  <area shape="rect" coords="331,154,586,185" href="cad_forms_4" data-toggle="modal" data-target="#cad_forms_4" alt=""/>
                  <area shape="rect" coords="331,192,586,223" href="cad_box_4" data-toggle="modal" data-target="#cad_box_4" alt=""/>
                  <area shape="rect" coords="331,230,586,261" href="cad_discount_4" data-toggle="modal" data-target="#cad_discount_4" alt=""/>
                  <area shape="rect" coords="331,268,586,299" href="cad_promotional_4" data-toggle="modal" data-target="#cad_promotional_4" alt=""/>
                  <area shape="rect" coords="331,306,586,337" href="cad_loss_4" data-toggle="modal" data-target="#cad_loss_4" alt=""/>
                  <area shape="rect" coords="331,345,586,376" href="cad_trade_4" data-toggle="modal" data-target="#cad_trade_4" alt=""/>
                  <area shape="rect" coords="331,383,586,414" href="cad_approach_4" data-toggle="modal" data-target="#cad_approach_4" alt=""/>
                  <area shape="rect" coords="331,422,586,453"  href="cad_subtype_4" data-toggle="modal" data-target="#cad_subtype_4" alt=""/>
                  </map>
            </div>
        </div>
    </div>
    @include('registrations.conditions')
    @include('registrations.forms')
    @include('registrations.box')
    @include('registrations.discount')
    @include('registrations.promotional')
    @include('registrations.loss')
    @include('registrations.trade')
    @include('registrations.approach')
    @include('registrations.subtype')
</div>

