document.addEventListener("DOMContentLoaded", function () {
  const seats = document.querySelectorAll(".seat");
  const seatNumberInput = document.getElementById("seat-number");

  seats.forEach((seat) => {
    seat.addEventListener("click", function () {
      const seatNumber = this.getAttribute("data-seat-number");
      if (!this.classList.contains("reserved")) {
        seatNumberInput.value = seatNumber;
      }
    });
  });
});
