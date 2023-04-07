<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Tab 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab2">Tab 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab3">Tab 3</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1">
          <form>
            <div class="mb-3">
              <label for="input1" class="form-label">Input 1</label>
              <input type="text" class="form-control" id="input1">
            </div>
            <div class="mb-3">
              <label for="input2" class="form-label">Input 2</label>
              <input type="text" class="form-control" id="input2">
            </div>
            <div class="mb-3">
              <label for="dropdown1" class="form-label">Dropdown 1</label>
              <select class="form-select" id="dropdown1">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="tab-pane fade" id="tab2">
          <form>
            <div class="mb-3">
              <label for="input3" class="form-label">Input 3</label>
              <input type="text" class="form-control" id="input3">
            </div>
            <div class="mb-3">
              <label for="input4" class="form-label">Input 4</label>
              <input type="text" class="form-control" id="input4">
            </div>
            <div class="mb-3">
              <label for="dropdown2" class="form-label">Dropdown 2</label>
              <select class="form-select" id="dropdown2">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="tab-pane fade" id="tab3">
          <form>
            <div class="mb-3">
              <label for="input5" class="form-label">Input 5</label>
              <input type="text" class="form-control" id="input5">
            </div>
            <div class="mb-3">
              <label for="input6" class="form-label">Input 6</label>
              <input type="text" class="form-control" id="input6">
            </div>
            <div class="mb-3">
              <label for="dropdown3" class="form-label">Dropdown 3</label>
              <select class="form-select" id="dropdown3">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</body>

</html>