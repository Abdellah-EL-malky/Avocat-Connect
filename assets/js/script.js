function showReservationForm(lawyerName) {
    document.getElementById('reservationForm').classList.remove('hidden');
    document.getElementById('selectedLawyer').value = 'Me. ' + lawyerName;
  }