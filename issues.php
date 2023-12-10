<?php
    include 'includes/header.php';
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
            <select name="users" id="users">
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
                <!-- <div class="selected-tools-inner">
                  <input id="selected-tool" type="text">
                  <input type="number" name="qty" id="selected-qty">
                </div> -->
             </div>
             <button id="submitForm" type="submit" onclick="submitForm()">Submit</button>
          </div>
          
        </div>

</form>


</section>






<script>

    document.getElementById("add-tool").addEventListener('click', function(event){
    event.preventDefault();
    });


  function addTool(){
    const tool = document.getElementById("tools");
    const qty = document.getElementById("qty");
    const parentDiv = document.querySelector(".selected-tools");
    let selectedTool;

    // <div class="selected-tools-inner">
    //               <input id="selected-tool" type="text">
    //               <input type="number" name="qty" id="selected-qty">
    //             </div>

    const div = document.createElement("div");
    div.classList.add("selected-tools-inner");

    const toolInput = document.createElement("input");
    toolInput.setAttribute("id", "selected-tool");
    toolInput.setAttribute("type", "text");
    toolInput.setAttribute("name", "selected-tool");

    toolInput.value = tool.value;


    const qtyInput = document.createElement("input");
    qtyInput.setAttribute("name", "selected-qty");
    qtyInput.setAttribute("type", "number");
    qtyInput.setAttribute("id", "selected-qty");

    qtyInput.value = qty.value;


    div.appendChild(toolInput);
    div.appendChild(qtyInput);
    parentDiv.appendChild(div);  
  }

  


 
</script>





<?php
    include 'includes/footer.php';
?>