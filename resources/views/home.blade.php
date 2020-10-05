@extends('layouts.app')

@section('content')
<div class="row layout-top-spacing">

    <div class="row">
        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Fill Up Data</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="text" name="age" class="form-control" id="age" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <input type="text"  name="gender" class="form-control" id="gender" placeholder="">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="bday">Birthday</label>
                            <input type="date"  name="bday" class="form-control" id="bday" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check pl-0">
                                <div class="custom-control custom-checkbox checkbox-info">
                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                    <label class="custom-control-label" for="gridCheck">Check me out</label>
                                </div>
                            </div>
                        </div>
                      <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
