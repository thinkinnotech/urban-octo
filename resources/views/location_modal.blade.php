<?php
/**
 * Created by PhpStorm.
 * User: dj
 * Date: 6/27/2017
 * Time: 9:02 PM
 */
?>
<div class="modal fade" id="location_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
               <div class="row">
                   <div class="col-md-12">
                       <h4>Choose your Location</h4>
                       <div class="well">
                           <?php $cities = \App\City::all(); ?>
                           <div class="row">
                           @foreach($cities as $city)
                               <div class="col-sm-3">
                                   <p style="cursor: pointer;" onclick="($('#city').val(this.innerHTML));$('#change_city').html(this.innerHTML);$('#location_modal').modal('toggle')">{{$city->city}}</p>
                               </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
               </div>
            </div>

            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>
