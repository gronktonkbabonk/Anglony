<?php
$lang ['admin'] ['plugin'] ['submenu'] = array (
	'default' => 'Διαχείριση προσθέτων'
);

/* main plugin panel */
$lang ['admin'] ['plugin'] ['default'] = array(
	'head' => 'Διαχειριστείτε τα πρόσθετα',
	'enable' => 'Ενεργοποίηση',
	'disable' => 'Απενεργοποίηση',
	'descr' => 'Ένα <a class="hint" ' . //
		'href="https://wiki.flatpress.org/doc:techfaq#plugins" target="_blank" title="Τι είναι ένα πρόσθετο;">πρόσθετο</a> είναι ένα στοιχείο το οποίο μπορεί να επεκτείνει τις δυνατότητες του FlatPress.</p>' . //
		'<p>Μπορείτε να εγκαταστήσετε πρόσθετα ανεβάζοντας τα στον φάκελο <code>fp-plugins/</code></p><p>Αυτός ο πίνακας ελέγχου σας επιτρέπει να ενεργοποιήσετε και να απενεργοποιήσετε πρόσθετα ',
	'name' => 'Όνομα',
	'description' => 'Περιγραφή',
	'author' => 'Συντάκτης',
	'version' => 'Έκδοση',
	'action' => 'Δράση'
);

$lang ['admin'] ['plugin'] ['default'] ['msgs'] = array(
	1 => 'Η ρύθμιση αποθηκεύτηκε',
	-1 => 'Προέκυψε κάποιο σφάλμα κατά την αποθήκευση. Αυτό μπορεί να συνέβη για διάφορους λόγους: ίσως το αρχείο σας περιέχει συντακτικά λάθη.'
);

/* system errors */
$lang ['admin'] ['plugin'] ['errors'] = array(
	'head' => 'Προέκυψαν τα ακόλουθα σφάλματα κατά την φόρτωση των πρόσθετων:',
	'notfound' => 'Το πρόσθετο δεν βρέθηκε. Παρακάμπτεται.',
	'generic' => 'Σφάλμα νούμερο %d'
);
?>