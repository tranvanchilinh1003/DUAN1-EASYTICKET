

<style>
    .seats {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.row {
  display: flex;
  gap: 10px;
}

.seat {
  width: 40px;
  height: 40px;
  background-color: #ccc;
  cursor: pointer;
}

.seat.selected {
  background-color: #4CAF50;
}

.total {
  margin-top: 20px;
}

.checkout-button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

.checkout-button:hover {
  background-color: #45a049;
}

.checkout-button:active {
  background-color: #3e8e41;
}
</style>
<body>
  <h1>Chọn ghế xem phim</h1>
  
  <div class="seats">
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
  </div>
  
  <div class="total">
    <p>Tổng tiền: <span id="total-price">0</span> đồng</p>
  </div>
  
  <button class="checkout-button">Thanh toán</button>
  
  <script src="script.js"></script>

<script>
    const seats = document.querySelectorAll('.seat');
const totalPrice = document.getElementById('total-price');
let selectedSeats = [];

// Chọn ghế
function selectSeat() {
  if (!this.classList.contains('selected')) {
    this.classList.add('selected');
    selectedSeats.push(this);
  } else {
    this.classList.remove('selected');
    selectedSeats = selectedSeats.filter(seat => seat !== this);
  }

  calculateTotalPrice();
}

// Tính toán tổng tiền
function calculateTotalPrice() {
  const pricePerSeat = 1000; // Giá vé mỗi ghế
  const total = selectedSeats.length * pricePerSeat;
  totalPrice.textContent = total;
}

// Gắn sự kiện cho các ghế
seats.forEach(seat => seat.addEventListener('click', selectSeat));
</script>