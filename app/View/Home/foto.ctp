<?php $this->assign("title", "Киндерленд фото | Детский сад фото | Фото детских садов"); ?>
<?php $this->Html->meta("keywords", "фото детский сад, фото Киндерленд, фотографии детских садов, фотографии детей в детском саду, фотографии помещения детского сада", array("inline" => false)); ?>
<?php $this->Html->meta("description", "Фото нашего помещение вы можете увидеть здесь, фотографии комнат где учатся наши детки.", array("inline" => false)); ?>
<!-- https://v4-alpha.getbootstrap.com/components/carousel/
    http://ashleydw.github.io/lightbox/ -->
<h1 class="rubric">Фото</h1>
<div id="carousel-example-generic" class=" newCar carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class=" carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="/img/kids1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="/img/kids2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="/img/kids3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="clean"></div>
<div class="album">
    <div class="row textCenter ">
        <div class="col-sm-6">
            <div class="card2 card-block">
                <p class="card-title">Приемная</p>
                <div class="image-thumb">
                    <a href="/img/kids1.jpg" data-title="Foto 1" data-toggle="lightbox" data-gallery="hidden-images-1">
                        <img src="/img/kids1.jpg" alt="Card image" class="card-image "/>
                    </a>
                </div>
            </div>
            <div data-toggle="lightbox" data-gallery="hidden-images-1" data-remote="/img/kids1.jpg" data-title="Foto 1"></div>
            <div data-toggle="lightbox" data-gallery="hidden-images-1" data-remote="/img/kids2.jpg" data-title="Foto 2"></div>
            <div data-toggle="lightbox" data-gallery="hidden-images-1" data-remote="/img/kids3.jpg" data-title="Foto 3"></div>
        </div>
        <div class="col-sm-6">
            <div class="card2 card-block">
                <p class="card-title">Розумашки</p>
                <div class="image-thumb">
                    <a href="/img/kids2.jpg" data-title="Foto 2" data-toggle="lightbox" data-gallery="hidden-images-2">
                        <img src="/img/kids2.jpg" alt="Card image" class="card-image "/>
                    </a>
                </div>
            </div>
            <div data-toggle="lightbox" data-gallery="hidden-images-2" data-remote="/img/kids1.jpg" data-title="Foto 1"></div>
            <div data-toggle="lightbox" data-gallery="hidden-images-2" data-remote="/img/kids2.jpg" data-title="Foto 2"></div>
            <div data-toggle="lightbox" data-gallery="hidden-images-2" data-remote="/img/kids3.jpg" data-title="Foto 3"></div>
        </div>
        <div class="clean"></div>
        <div class="col-sm-6">
            <div class="card2 card-block">
                <p class="card-title">Киндерята</p>
                <div class="image-thumb">
                    <a href="/img/kids2.jpg" data-title="Foto 2" data-toggle="lightbox" data-gallery="hidden-images-3">
                        <img src="/img/kids2.jpg" alt="Card image" class="card-image"/>
                    </a>
                </div>
            </div>
            <div data-toggle="lightbox" data-gallery="hidden-images-3" data-remote="/img/kids3.jpg" data-title="Foto 3"></div>
        </div>
        <div class="col-sm-6">
            <div class="card2 card-block">
                <p class="card-title">Чомусики</p>
                <div class="image-thumb">
                    <a href="/img/kids2.jpg" data-title="Foto 2" data-toggle="lightbox" data-gallery="hidden-images-4">
                        <img src="/img/kids2.jpg" alt="Card image" class="card-image "/>
                    </a>
                </div>
            </div>
            <div data-toggle="lightbox" data-gallery="hidden-images-4" data-remote="/img/kids3.jpg" data-title="Foto 3"></div>
        </div>
    </div>
</div>
