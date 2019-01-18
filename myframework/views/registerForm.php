<br/>
<div class="col-6 mx-auto m-10">
  <h2>Register</h2>
  <form class="mb-10" action="/register/processForm" method="POST">

    <div class="form-group">
      <label for="name">Username*</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Username">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password*</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="bio">Bio</label>
      <textarea class="form-control" name="bio" id="bio" rows="3"></textarea>
    </div>

    <label>Gender</label>
    <div class="form-check">

      <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
      <label class="form-check-label" for="male">
        Male
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
      <label class="form-check-label" for="female">
        Female
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="other" value="other">
      <label class="form-check-label" for="other">
        Other
      </label>
    </div>

    <div class="form-group">
      <label for="ageFormControlSelect">Age</label>
      <select class="form-control" name="age">
        <option value="10-19">10-19</option>
        <option value="20-29">20-29</option>
        <option value="30-39">30-39</option>
        <option value="40-49">40-49</option>
        <option value="50+">50+</option>
      </select>
    </div>

    <div class="form-group form-check mt-10">
      <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
      <label class="form-check-label" for="exampleCheck1">I want to recieve a newsletter!</label>
    </div>

    <p style=color:red>*Denotes required field</p>
    <button type="submit" name="" class="btn btn-primary">Submit</button>
  </form>
</div>
<br/>
