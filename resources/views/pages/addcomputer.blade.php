@include('layouts.app')

<form class="container">
    <div class="form-group">
        <label>Serial Number</label>
        <input type="password" class="form-control" id="serialnumber" placeholder="Serial Number">
    </div>
    <div class="form-group">
        <label>User Name</label>
        <input type="password" class="form-control" id="username" placeholder="User Name">
    </div>
    <div class="form-group">
        <label>Host Name</label>
        <input type="password" class="form-control" id="hostname" placeholder="Host Name">
    </div>
    <div class="form-group">
        <label>Manufacturer</label>
        <input type="password" class="form-control" id="manufacturer" placeholder="Manufacturer">
    </div>
    <div class="form-group">
        <label>Model</label>
        <input type="password" class="form-control" id="model" placeholder="Model">
    </div>
    <div class="form-group">
        <label>CPU Model</label>
        <input type="password" class="form-control" id="cpumodel" placeholder="CPU Model">
    </div>
    <div class="form-group">
        <label>Memory</label>
        <input type="password" class="form-control" id="memory" placeholder="Memory">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>