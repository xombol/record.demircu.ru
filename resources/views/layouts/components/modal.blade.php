<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Booking</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="success_form" style="display: none!important;">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <h2 class="" >Success booking!</h2>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <p id="info-booking"></p>
                        </div>
                    </div>


                </div>

                <ul class="list-group">
                    <li class="list-group-item" style=" font-weight: bold; font-family: cursive; ">Date <span id="date_modal"></span></li>
                    <li class="list-group-item" style=" font-weight: bold; font-family: cursive; ">Time <span id="time_modal"></span></li>
                </ul>
                <br>
                <form action="" method="post" id="bookingForm">
                    @csrf
                    <input type="hidden" name="id_event" id="id_event" value="">
                    <input type="hidden" name="date" id="date_modal_input" value="">
                    <input type="hidden" name="time" id="time_modal_input" value="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NAME</span>
                        </div>
                        <input type="text" id="name_modal" name="name" class="form-control"  required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">PHONE</span>
                        </div>
                        <input type="text" name="phone_modal" id="phone_modal" class="form-control"  required>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Send">
                </form>

            </div>
        </div>
    </div>
</div>
