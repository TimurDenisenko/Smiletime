const popoverMap = new Map();
let currentOpenPopover = null;
const targets = document.querySelectorAll('.target');

function createPopoverForTarget(target) {
  const popover = document.createElement('div');
  popover.classList.add('popover');
  const titleHTML = target.getAttribute('data-title') || '';
  const contentHTML = target.getAttribute('data-content') || '';
  popover.innerHTML = `
    <h3>${titleHTML}</h3>
    <p>${contentHTML}</p>
  `;
  document.body.appendChild(popover);

  popover.addEventListener('click', (e) => {
    hidePopover(popover);
    targets.forEach(t => {
        t.classList.remove("blackout")
    });
    e.stopPropagation();
  });

  return popover;
}

function positionPopover(target, popover) {
  const rect = target.getBoundingClientRect();
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
  popover.classList.add('active');
  const popoverRect = popover.getBoundingClientRect();
  popover.style.left = `${(rect.left + scrollLeft + (rect.width / 2)) - (popoverRect.width / 2)}px`;
  popover.style.top = `${(rect.top + scrollTop + (rect.height / 2)) - (popoverRect.height / 2)}px`;
}

function showPopover(target) {
  let popover = popoverMap.get(target);
  if (!popover) {
    popover = createPopoverForTarget(target);
    popoverMap.set(target, popover);
  }

  if (currentOpenPopover && currentOpenPopover !== popover) {
    hidePopover(currentOpenPopover);
  }

  if (!popover.classList.contains('active')) {
    positionPopover(target, popover);
    popover.classList.add('active');
    currentOpenPopover = popover;
    targets.forEach(t => {
        t.classList.add("blackout")
    });
  } else {
    hidePopover(popover);
  }
}

function hidePopover(popover) {
  popover.classList.remove('active');
  if (popover === currentOpenPopover) {
    currentOpenPopover = null;
  }
}

targets.forEach(target => {
  target.addEventListener('click', (e) => {
    showPopover(target);
    e.stopPropagation();
  });
});

window.addEventListener('resize', () => {
  if (currentOpenPopover) {
    for (let [t, p] of popoverMap) {
      if (p === currentOpenPopover) {
        positionPopover(t, p);
        break;
      }
    }
  }
});

document.addEventListener('click', (e) => {
  if (currentOpenPopover) {
    if (currentOpenPopover.contains(e.target) || !e.target.classList.contains('target')) {
      hidePopover(currentOpenPopover);
      targets.forEach(t => {
          t.classList.remove("blackout")
      });
    }
  }
});