function toggleText(card) {
    const cardBody = card.querySelector('.card-body p');
    cardBody.style.display = cardBody.style.display === 'none' ? 'block' : 'none';
}