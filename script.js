const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

const selectTime = document.getElementById("Time");
const currTimeSpan = document.getElementById("currTime");

  selectTime.addEventListener("change", function() {
    // Get the selected index
    const selectedIndex = selectTime.selectedIndex;
  
    // Check if the selected index is greater than 0
    if (selectedIndex > 0) {
      // Get the selected option's text content
      const selectedTimeText = selectTime.options[selectedIndex].textContent;
  
      // Update the content of the span element with the selected time
      currTimeSpan.textContent = selectedTimeText;
    } else {
      // Clear the content of the span element if the default option is selected
      currTimeSpan.textContent = "";
    }
});


populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
  

  setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Get data from localstorage and populate UI
function populateUI() {
  // Retrieve selected seats data from localStorage
  const selectedSeatsJSON = localStorage.getItem("selectedSeats");

  // Check if selectedSeatsJSON is not null and is a valid JSON string
  if (selectedSeatsJSON !== null) {
    try {
      // Attempt to parse the JSON string into an array
      const selectedSeats = JSON.parse(selectedSeatsJSON);

      // Ensure that selectedSeats is an array
      if (Array.isArray(selectedSeats)) {
        // Iterate over the seats and add the "selected" class if the index is found in selectedSeats
        seats.forEach((seat, index) => {
          if (selectedSeats.includes(index)) {
            seat.classList.add("selected");
          }
        });
      } else {
        console.error("Selected seats data is not in array format:", selectedSeats);
      }
    } catch (error) {
      console.error("Error parsing selected seats JSON:", error);
    }
  } else {
    console.log("No selected seats data found in localStorage");
  }

  // Retrieve and set selected movie index from localStorage
  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");
  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log("Selected movie index:", selectedMovieIndex);
  } else {
    console.log("No selected movie index found in localStorage");
  }
}


console.log(populateUI())
// Movie select event
movieSelect.addEventListener("change", (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
