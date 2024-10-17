

<div class="col-md-12">
    <div class="modal fade" id="cad_prod">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <img name="cad_prod" src="storage/images/cad_products/cad_prod.png" width="1150px"  height="680px" id="cad_prod" usemap="#m_cad_prod" alt="" />
                  <map name="m_cad_prod" id="m_cad_prod">
                  <area shape="rect" coords="339,64,587,99" href="cad_families_4" data-toggle="modal" data-target="#cad_families_4" alt=""/>
                  <area shape="rect" coords="339,102,587,137" href="cad_warranties_4" data-toggle="modal" data-target="#cad_warranties_4" alt=""/>
                  <area shape="rect" coords="339,142,587,177" href="cad_brands_4" data-toggle="modal" data-target="#cad_brands_4" alt=""/>
                  <area shape="rect" coords="339,181,587,216" href="cad_revisions_4" data-toggle="modal" data-target="#cad_revisions_4" alt=""/>
                  <area shape="rect" coords="339,220,587,255" href="cad_section_4" data-toggle="modal" data-target="#cad_section_4" alt=""/>
                  <area shape="rect" coords="339,258,587,293" href="cad_department_4" data-toggle="modal" data-target="#cad_department_4" alt=""/>
                  <area shape="rect" coords="339,297,587,332" href="cad_conversor_4" data-toggle="modal" data-target="#cad_conversor_4" alt=""/>
                  </map>
            </div>
        </div>
    </div>
    @include('registrations.families')
    @include('registrations.warranties')
    @include('registrations.brands')
    @include('registrations.revisions')
    @include('registrations.section')
    @include('registrations.department')
    @include('registrations.conversor')
</div>

