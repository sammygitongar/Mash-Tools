<?php
  include 'includes/issuesHeader.php';
?>






<h1>Tool Issuance Form</h1>


<section class="issuance-form-container">
    
  <form id="issuanceForm" class="issuance-form">
        <div class="issuehead">
            <img src="assets/images/issue.png" alt="">
            <h3>Register a new Tool</h3>
        </div>

        <div class="form-contents">
          <div class="user-section">
            <label for="users">Select a user</label>
            <select name="username" id="users">
              <option value="Toza">Toza</option>
              <option value="Toza">Toza</option>
              <option value="Toza">Toza</option>
              <option value="Toza">Toza</option>
              <option value="Toza">Toza</option>
            </select>
          </div>


          <div class="tools-section">
             <div class="tool-container">
                <div class="tool">
                  <label for="tools" name="tools" id="">Select a tool</label>

                  <select name="tools" id="tools">
                    <option value="Pliers">Pliers</option>
                    <option value="Pliers1">Pliers1</option>
                    <option value="Pliers2">Pliers2</option>
                    <option value="Pliers3">Pliers3</option>
                  </select>
                </div>

                <div class="qty-container">
                    <div class="qty">
                      <label for="qty">Qty</label>
                      <input type="number" name="qty" id="qty">
                  </div>
              </div>
             </div>

             <button id="add-tool" onclick="addTool()">Add</button>

             <div class="selected-tools">
                <h4>Selected Tools</h4>
             </div>
             <button id="submit-form" onclick="submitForm()">Submit</button>
          </div>
          
        </div>

</form>

  


</section>






<script>

    document.getElementById("add-tool").addEventListener('click', function(event){
    event.preventDefault();
    });

    document.querySelector("#submit-form").addEventListener('click', function(event){
        event.preventDefault();
      });

    

    


  function addTool(){
    const tool = document.getElementById("tools");
    const parentDiv = document.querySelector(".selected-tools");
    let selectedTool;
    const div = document.createElement("div");
    div.classList.add("selected-tools-inner");

    const toolInput = document.createElement("input");
    toolInput.setAttribute("id", "selected-tool");
    toolInput.setAttribute("type", "text");
    toolInput.setAttribute("name", "selected-tool");

    toolInput.value = tool.value;


    const qtyInput = document.createElement("input");
    qtyInput.setAttribute("name", `selected-qty[${toolInput.value}]`);
    qtyInput.setAttribute("type", "number");
    qtyInput.setAttribute("id", "selected-qty");

    qtyInput.value = qty.value;
    


    div.appendChild(toolInput);
    div.appendChild(qtyInput);
    parentDiv.appendChild(div);



  };

 
  function submitForm (){
    const parentDiv = document.querySelector('.selected-tools');
    const toolInput = parentDiv.querySelector('#selected-tool');
    const qtyInput = parentDiv.querySelector("#selected-qty");

    const users = document.querySelector("#users");

    const toSubmitForm = document.createElement("form");
    const submitBtn = document.createElement("button");
    submitBtn.setAttribute("type", "submit");
    toSubmitForm.method = "POST";
    toSubmitForm.action = "issueHandler.php";

    toSubmitForm.appendChild(users);
    toSubmitForm.appendChild(parentDiv);
    toSubmitForm.appendChild(submitBtn);


    document.body.appendChild(toSubmitForm);

    toSubmitForm.style.display = "none";


    toSubmitForm.submit();


    console.log(toSubmitForm);


  }



</script>



<?php
  include 'includes/footer.php'
?>