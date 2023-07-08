
<div class="modal" id="addProperty" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class='col-md-10'>
                    <h5 class="modal-title" >Add Property</h5>
                </div>
                <div class='col-md-2'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form method='post' action='{{url('/properties')}}' onsubmit='show();'  enctype="multipart/form-data" >
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class='row'>
                        <div class='col-md-12'>
                            Property Code :
                            <input type="text" class="form-control-sm form-control "    name="code" required/>
                        </div>
                        <div class='col-md-12'>
                            Property Name :
                            <input type="text" class="form-control-sm form-control "   name="name" required/>
                        </div>
                        <div class='col-md-12'>
                            Property Type :
                            <input type="text" class="form-control-sm form-control "    name="type" required/>
                        </div>
                        <div class='col-md-12'>
                            Location :
                            <select name='location' class='form-control-sm form-control locations' required>
                                <option value=""></option>
                                @foreach($locations as $key => $location )
                                    <option value='{{$location->location}}'>{{$location->location}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type='submit'  class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>