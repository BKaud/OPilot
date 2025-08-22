document.addEventListener('DOMContentLoaded', () => {
  const rideGrid = document.querySelector('.ride-grid');
  let draggedElement = null;
  let dropTarget = null;

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
      if (dropTarget) {
        dropTarget.classList.remove('drag-over');
        dropTarget = null;
      }
      draggedElement = null;
    }
  });

  // Handle drag over
  rideGrid.addEventListener('dragover', (e) => {
    e.preventDefault();
    const afterElement = getDragAfterElement(rideGrid, e.clientX, e.clientY);
    if (afterElement && afterElement !== draggedElement) {
      rideGrid.insertBefore(draggedElement, afterElement);
      setDropTarget(afterElement);
    } else if (!afterElement) {
      rideGrid.appendChild(draggedElement);
      clearDropTarget();
    }
  });

  // Highlight drop target
  function setDropTarget(target) {
    if (dropTarget && dropTarget !== target) {
      dropTarget.classList.remove('drag-over');
    }
    dropTarget = target;
    if (dropTarget) {
      dropTarget.classList.add('drag-over');
    }
  }
  function clearDropTarget() {
    if (dropTarget) {
      dropTarget.classList.remove('drag-over');
      dropTarget = null;
    }
  }

  // Helper: find the card after which to insert
  function getDragAfterElement(container, x, y) {
    const draggableElements = [...container.querySelectorAll('.ride-card:not(.dragging)')];
    let closest = null;
    let closestDist = Number.POSITIVE_INFINITY;
    draggableElements.forEach(child => {
      const rect = child.getBoundingClientRect();
      // Use center point distance for best UX
      const dx = x - (rect.left + rect.width / 2);
      const dy = y - (rect.top + rect.height / 2);
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < closestDist) {
        closestDist = dist;
        closest = child;
      }
    });
    return closest;
  }
});
