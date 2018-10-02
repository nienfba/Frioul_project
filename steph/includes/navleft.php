
<style>
    #navBottom.col-md-4{
        width: 100%;
        height: 100%;
        min-height: 100%;
        margin: 0; padding: 0;
        display: inline-block;
        margin-top: 50%;
    }

    input {
        padding-top: 15px;
        background: rgba(255,255,255,0.10);
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        border: none!important;
        color: white;
        padding: 10px 15px;
        //border-radius: 25px!important;
        font-size: 16px;
        outline: none;
    }

    input[type="text"], textarea {
        outline: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2)!important;
        border:1px solid #ccc !important;
    }

    button[type="button"] {
        outline: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2)!important;

        border:none!important;
    }

    .left{
        border-radius:50px 0px 0px 50px;
        -moz-border-radius:50px 0px 0px 50px;
        -webkit-border-radius:50px 0px 0px 50px;
        background-color: #fff;
    }
    .right{
        border-radius:0px 50px 50px 0px;
        -moz-border-radius:0px 50px 50px 0px;
        -webkit-border-radius:0px 50px 50px 0px;
        background-color: #fff;
    }
</style>
<div id="navBottom" class="container-fluid">
    <div class="row">
        <div class="col-md-4 mt-2">
            <button type="button" class="btn btn-danger mr-2 question" style="border-radius:100px" data-container="body" data-toggle="popover" data-placement="top">
                <i class="fa fa-question"></i>
            </button>

        </div>
        <div class="col-md-4 mt-2">
            <form>
                <div class="form-row align-items-center w-80">
                    <label class="sr-only" for="inlineFormInputGroup">hashtag</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text left">#</div>
                        </div>
                        <input type="text" class="form-control rounded-left" id="inputHashtag" placeholder="hashtag">
                        <div class="input-group-prepend">
                            <div class="input-group-text btn right" id="hashtag">OK</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 mt-2">
            <div class="row float-right">
                <button type="button" class="btn btn-primary mr-2" id="delete" style="border-radius:100px">
                    <i class="fa fa-crosshairs"></i>
                </button>
                <button type="button" id="showRight" class="btn btn-info mr-2" style="border-radius:100px">
                    <i class="fa fa-compass"></i>
                </button>
                <button type="button" class="btn btn-secondary mr-2" style="border-radius:100px">
                    <i class="fa fa-camera-retro"></i>
                </button>
                <button type="button" id="showOverlay" class="btn btn-success mr-2" style="border-radius:100px">
                    <i class="fa fa-heart"></i>
                </button>
            </div>

            <!--<button id="showRight" style="border-radius:100px">NavRight</button>
              <button id="showOverlay" style="border-radius:100px">Overlay</button>-->

        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function () {


        //alert('ok');

        $('.question').on('mouseover', () => {
            $('.question').popover({
                container: 'body',
                content: "Un doute ? Besoin d'info supplementaire ? Demandez à la comunuté !"
            });
            $('.question').popover('show');
            //alert('ok');
        })
        $('.question').on('mouseleave', () => {

            $('.question').popover('hide');
            //alert('ok');
        })

    });
</script>
