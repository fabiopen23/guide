

<div class="col-md-12">
    <div class="modal fade" id="cad_check">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <img name="cad_check" src="storage/images/cad_checklist/cad_check.png" width="1150px"  height="680px" id="cad_check" usemap="#m_cad_check" alt="" />
                  <map name="m_cad_check" id="m_cad_check">
                  <area shape="rect" coords="337,299,479,326" href="cad_check_4" data-toggle="modal" data-target="#cad_check_4" alt=""/>
                  <area shape="rect" coords="337,338,479,365" href="cad_defects_4" data-toggle="modal" data-target="#cad_defects_4" alt=""/>
                  <area shape="rect" coords="337,376,479,403" href="cad_corrections_4" data-toggle="modal" data-target="#cad_corrections_4" alt=""/>
                  <area shape="rect" coords="337,415,479,442" href="cad_group_4" data-toggle="modal" data-target="#cad_group_4" alt=""/>
                  </map>
            </div>
        </div>
    </div>
    @include('registrations.checklist')
    @include('registrations.defects')
    @include('registrations.corrections')
    @include('registrations.group')

</div>

