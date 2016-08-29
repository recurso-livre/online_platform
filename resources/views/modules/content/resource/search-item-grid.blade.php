<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="material-content">
        <div class="row">
            <div class="col-md-12">
                <div class="image-fit" style="min-height: 160px;">
                    <img src="{{ $resource->resourceUri->images[0] }}">
                </div>
            </div>
            <div class="col-md-12" style="text-align:center;">
                <div class="truncate">
                    <span class="text-title">{{ $resource->name }}</span>
                </div>
            </div>
            <div class="col-md-12" style="text-align:center;">
                    <a href="/#/recurso/exibir/{{ $resource->idResource }}" class="material-btn">Solicitar Orçamento</a>
            </div>
            <!--<div class="col-md-12">-->
            <!--    <div class="row">-->
            <!--        <div class="col-md-12">-->
            <!--            <span class="text-title" style="font-size: 25px">Title</span>-->
            <!--        </div>-->
            <!--    </div>-->
                
            <!--    <div class="row">-->
            <!--        <div class="col-md-12">-->
            <!--            <button class="btn btn-success pull-right" style="margin-top: 20px">Solicitar Orçamento</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</div>