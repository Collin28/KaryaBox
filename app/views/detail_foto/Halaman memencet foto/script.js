const img = document.getElementById('artImg');
const modal = document.getElementById('modal');
const modalImg = document.getElementById('modalImg');
const closeModal = document.getElementById('closeModal');

const downloadBtn = document.getElementById('downloadBtn');
const saveBtn = document.getElementById('saveBtn');


img.addEventListener('click', () => {
  modal.classList.add('show');
  modalImg.src = img.src;
});


closeModal.addEventListener('click', () => {
  modal.classList.remove('show');
});


modal.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.classList.remove('show');
  }
});


document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    modal.classList.remove('show');
  }
});


downloadBtn.addEventListener('click', () => {
  const link = document.createElement("a");

  link.href = img.src;
  link.download = "artwork.webp"; 

  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);

  downloadBtn.innerText = "Downloaded!";
  setTimeout(() => downloadBtn.innerText = "Download", 1500);
});



saveBtn.addEventListener('click', () => {
  saveBtn.classList.toggle('saved');

  if (saveBtn.classList.contains('saved')) {
    saveBtn.innerText = 'Saved ✓';
  } else {
    saveBtn.innerText = 'Save';
  }

  let scale = 1;
let isDragging = false;
let startX, startY, translateX = 0, translateY = 0;

// 🔍 SCROLL ZOOM
modalImg.addEventListener("wheel", (e) => {
  e.preventDefault();
  scale += e.deltaY * -0.001;
  scale = Math.min(Math.max(1, scale), 3);

  updateTransform();
});

// 🖱 DRAG
modalImg.addEventListener("mousedown", (e) => {
  isDragging = true;
  startX = e.clientX - translateX;
  startY = e.clientY - translateY;
});

document.addEventListener("mousemove", (e) => {
  if (!isDragging) return;
  translateX = e.clientX - startX;
  translateY = e.clientY - startY;
  updateTransform();
});

document.addEventListener("mouseup", () => {
  isDragging = false;
});

function updateTransform() {
  modalImg.style.transform =
    `scale(${scale}) translate(${translateX}px, ${translateY}px)`;
}

});