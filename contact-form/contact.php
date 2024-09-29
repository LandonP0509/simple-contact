<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Form</title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>

    <header>
        <h1>Simple Contact Form</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Blue Lake Plumbing</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>

            <form class="row g-3 needs-validation" method="POST" action="process.php">
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationServer01" name="first_name" value="Mark" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationServer02" name="last_name" value="Smith" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input type="text" class="form-control" id="validationServerUsername" name="username" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                Please choose a username.
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationServer03" name="city" aria-describedby="validationServer03Feedback" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
            Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationServer04" class="form-label">State</label>
            <select class="form-select" id="validationServer04" name="state" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Choose...</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            </select>
            <div id="validationServer04Feedback" class="invalid-feedback">
            Please select a valid state.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationServer05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationServer05" name="zip" aria-describedby="validationServer05Feedback" required>
            <div id="validationServer05Feedback" class="invalid-feedback">
            Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
                <a href="terms-conditions.html">Agree to terms and conditions</a>
            </label>
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        </form>

      </body>
      <script>
    (function () {
        'use strict'
    
        var forms = document.querySelectorAll('.needs-validation')
    
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
    
                form.classList.add('was-validated')
            }, false)
        })
    })()
        </script>
</html>