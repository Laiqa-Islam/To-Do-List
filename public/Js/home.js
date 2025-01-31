//Showing Tasks 

function taskstatus(data) {
    // Loop through the data array and create a task element for each task
    let status = document.querySelectorAll(".status");

    // console.log(status);
    status.forEach((element) => {
     
        data.forEach((list) => {
            let form = element.parentElement;
            let td = form.parentElement;
            let tr = td.parentElement;
            let priorityList=tr.querySelector('.listPriority');
            // console.log(priorityList)
            let title = tr.firstElementChild; //getting to the title element inside td
            let input=tr.querySelector('input').value; //getting the value of id of the list

            //for line-thorugh completed lists
            if (parseInt(input)===list['id'] && list["status"] === "complete") {
                title.classList.toggle("completed");
                priorityList.classList.toggle("complete");
            }

            //for changing the text and colors of status buttons
            if(title.classList.contains('completed')){
                element.innerHTML="completed";
                element.classList.add('btn-success');
                element.classList.remove('btn-secondary');

            }else if(!title.classList.contains('completed')){
                element.innerHTML="Incomplete";
                element.classList.remove('btn-success');
                element.classList.add('btn-secondary');
            }

            // if (parseInt(input)===list['id'] && list["status"] === "complete") {
            //     priorityList.classList.toggle("complete");
            // }

            
        });
    });
}

// Fetch data from the API
fetch("/api/lists")
    .then((response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.json(); // Parse JSON response
    })
    .then((data) => {
        console.log(data); // Use the data (array of tasks)
        taskstatus(data); // Call a function to render tasks on the page
    })
    .catch((error) => {
        console.error("There was a problem with the fetch operation:", error);
    });


//Handles Priority Range
document.getElementById('addList').addEventListener('click', () => {
    const priority = document.getElementById('priority').value;

    if (priority < 1 || priority > 5) {
        alert('Please enter a value between 1 and 5.');
    } else {
        // Submit the form or send data to the server
        console.log('Value is valid:', priority);
    }
});