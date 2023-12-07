<?php
    include 'includes/header.php';
?>
<body>

    <h1>Tool Issuance Form</h1>
    <style>
        .issuance-form{
            display:flex;
            flex-direction: column;
            align-items: center;
            background: #1c343b17;
            margin-top: 30px;
            padding: 0 30px;
            border-radius: 20px;
            box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.199);
            backdrop-filter: blur(10px);
            width: 40vw;
            justify-content: space-around;
            
        }

      

        .issuehead{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .issuehead img{
            width: 20vw;
            border-radius: 20%;
            margin: 42px 0;
            border: 3px solid rgb(19, 46, 46);
            transition: .5s ease;
        }

        .issuehead img:hover{
            border-radius: 10px;
        }

        @media(max-width: 800px){
            .issuance-form{
                width: 80vw;
            }

            .issuehead img{
                width: 50vw;
            }

        }

        .issuance-user{
            display:flex;
            flex-direction:column;
            align-items: center;
        }

        .issuance-tools{
            display:flex;
            flex-direction:column;
            align-items:center;
        }




        .issuance-form-container{
            min-height: 100vh;
            display:flex;
            justify-content:center;

        }
    </style>

  <section class="issuance-form-container">
        
      <form id="issuanceForm" class="issuance-form">
        <div class="issuehead">
                <img src="assets/images/tools_issue.png" alt="">
                <h3>Register a new Tool</h3>
            </div>
        <!-- User Selection -->
       <div class="issuance-user">
        <label for="userSelect">Select User:</label>
            <div class="issuance-user-contents">
                <select id="userSelect" name="user">
                    <option value="user1">User 1</option>
                    <option value="user2">User 2</option>
                    <option value="user3">User 3</option>
                </select>
                <p class="select-user" id="select-btn" onclick="selectUser()">Select</p>
            </div>
       </div>

    

        <!-- Tools Selection -->
        <div class="issuance-tools">
            <label for="toolsSelect">Select Tools</label>
            <div class="issuance-tools-contents">
                <select id="toolsSelect" name="tools[]">
                    <option value="hammer">Hammer</option>
                    <option value="screwdriver">Screwdriver</option>
                    <option value="pliers">Pliers</option>
                    <option value="wrench">Wrench</option>
                    <option value="tape-measure">Tape Measure</option>
                    <option value="drill">Drill</option>
                    <option value="saw">Saw</option>
                    <option value="level">Level</option>
                    <option value="safety-goggles">Safety Goggles</option>
                    <option value="utility-knife">Utility Knife</option>
                </select>
                <input type="number" placeholder="Enter Quantity">
                <button type="button">Add tool</button>
            </div>
        </div>


        <button type="Submit">Submit</button>
    </form>


  </section>






  <script>
     
    </script>




<?php
    include 'includes/footer.php';
?>