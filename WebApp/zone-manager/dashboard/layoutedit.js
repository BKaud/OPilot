document.addEventListener('DOMContentLoaded', () => {
  const rideGrid = document.querySelector('.ride-grid');
  let draggedElement = null;

  // Handle drag start
  rideGrid.addEventListener('dragstart', (e) => {
    if (e.target.classList.contains('ride-card')) {
      draggedElement = e.target;
      e.target.classList.add('dragging');
    }
  });

  // Handle drag end
  rideGrid.addEventListener('dragend', (e) => {
    if (e.target.classList.contains('ride-card')) {
      e.target.classList.remove('dragging');
      draggedElement = null;
    }
  });

  // Handle drag over
  rideGrid.addEventListener('dragover', (e) => {
    e.preventDefault();
    const afterElement = getDragAfterElement(rideGrid, e.clientY);
    if (afterElement == null) {
      rideGrid.appendChild(draggedElement);
    } else {
      rideGrid.insertBefore(draggedElement, afterElement);
    }
  });

  // Helper function to determine the element after which to insert
  function getDragAfterElement(container, y) {
    const draggableElements = [...container.querySelectorAll('.ride-card:not(.dragging)')];
    return draggableElements.reduce(
      (closest, child) => {
        const box = child.getBoundingClientRect();
        const offset = y - box.top - box.height / 2;
        if (offset < 0 && offset > closest.offset) {
          return { offset, element: child };
        } else {
          return closest;
        }
      },
      { offset: Number.NEGATIVE_INFINITY }
    ).element;
  }
});
