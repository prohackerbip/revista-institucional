<?php return array (
  'emails.notification.subject' => 'Nuova notifica da {$siteTitle}',
  'emails.notification.body' => 'Hai ricevuto una nuova notifica da  {$siteTitle}:<br />
<br />
{$notificationContents}<br />
<br />
Link: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.description' => 'Questa mail è inviata agli utenti registrati che hanno chiesto di ricevere questo tipo di notifiche.',
  'emails.passwordResetConfirm.subject' => 'Conferma di modifica password',
  'emails.passwordResetConfirm.body' => 'Abbiamo ricevuto la richiesta di modificare la tua password per {$siteTitle}.<br />
<br />
Se non hai fatto questa richiesta, ignora questo messaggio e la password non sarà modificata.<br />
Se invece hai fatto tu la richiesta e desideri generare una nuova password, clicca sul link qui sotto.<br />
<br />
Reset password: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Questa email viene mandata ad un utente registrato quando questi indica che ha dimenticato la sua password o non riesce a fare il log in. Fornisce una URL per il reset della password.',
  'emails.userRegister.subject' => 'Registrazione nuovo utente',
  'emails.userRegister.body' => 'Gentilissimo {$userFullName}, <br />
<br />
Grazie per esserti registrato a {$contextName}.<br />
Qui sotto trovi lo username e la password per accedere alla rivista ed utilizzare il portale di sottomissione e revisione. <br />
<br />
Username: {$username}<br />
Password: {$password}<br />
<br />
Puoi richiedere in ogni momento la rimozione del tuo account inviandoci una mail.<br />
<br />
Con i più cordiali saluti,<br />
<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Questa email viene mandata agli utenti appena registrati per dar loro il benvenuto nel sistema e fornirgli una nota della loro username e password.',
  'emails.userValidate.subject' => 'Convalida il tuo account',
  'emails.userValidate.body' => 'Gentilissimo {$userFullName}<br />
<br />
Hai creato un nuovo account in {$contextName}, ma prima di usarlo, devi convalidare il tuo indirizzo email.<br />
<br />
Per farlo, clicca sul link qui sotto:<br />
{$activateUrl}<br />
<br />
Se non si apre automaticamente una finestra del browser per la verifica, puoi copiare questo link e incollarlo direttamente nella barra degli indirizzi del tuo browser<br />
<br />
Grazie,<br />
<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Questa email viene spedita a un nuovo utente registrato come benvenuto nel sistema e gli fornisce una nota con il suo nome utente e password.',
  'emails.reviewerRegister.subject' => 'Registrazione come revisore per {$contextName}',
  'emails.reviewerRegister.body' => 'Alla luce delle tue competenze, ci siamo presi la libertà di registrare il tuo nome nella banca dati dei revisori per {$contextName}.<br />
<br />
Questo non implica nessun tipo di impegno da parte tua, ma semplicemente  ci permette di contattarti per proporti la revisione di manoscritti sottoposti per la  pubblicazione per la questa testata.<br />
<br />
Quando ti inviteremo ad una revisione, riceverai il titolo e l\'abstracts del manoscritto ed avrai l\'opportunità di  accettare o rifiutare l\'invito. Puoi anche chiedere in qualsiasi momento di far rimuovere il tuo nome dall\'elenco dei revisori.<br />
<br />
Di seguito il tuo nome utente e password, che vengono usate per tutte le interazioni con la rivista attraverso il suo sito web.<br />
Se hai modo, ti suggeriamo di  verificare le informazioni inserite e di completare il tuo profilo, inclusi i tuoi interessi di revisione.<br />
<br />
Nome utente: {$username}<br />
Password: {$password}<br />
<br />
Con i più cordiali saluti,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Questa email viene inviata ad un nuovo revisore quando viene registrato per la prima volta, inviandogli username e password.',
  'emails.publishNotify.subject' => 'Pubblicato un nuovo fascicolo',
  'emails.publishNotify.body' => 'Gentile lettore,<br />
<br />
All\'indirizzo {$contextUrl} è appena stato pubblicato un nuovo numero di {$contextName}.<br />
<br />
Grazie per l\'interesse dimostratoci,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Questa email viene mandata ai lettori registrsati tramite il link "Notifica Utenti" nella home utente del curatore. Questa informa i lettori di una nuova uscita e li invita a visitare il journal alla URL fornita.',
  'emails.lockssExistingArchive.subject' => 'Richiesta di archiviazione per {$contextName}',
  'emails.lockssExistingArchive.body' => 'Caro [Bibliotecario dell\'Universita\']<br />
<br />
{$contextName} &lt;{$contextUrl}&gt; è una testata con la quale un vostro membro  [nome del membro], collabora come [posizione]  sta cercando di instaurare un archivio condiviso LOCKSS (Lots of Copies Keep Stuff Safe) con questa e altre biblioteche universitarie.<br />
<br />
[Breve descrizione del journal]<br />
<br />
La URL al manifesto di pubblicazione del LOCKSS  per il nostro journal &amp;#x00E8;: {$contextUrl}/gateway/lockss<br />
<br />
Comprendiamo che state gi&amp;#x00E0; partecipando al LOCKSS. Se possiamo fornire qualsiasi metadato aggiuntivo per scopi di registrazione al nostro journal con la vostra versione del LOCKSS, saremo felici di fornirvelo.<br />
<br />
Grazie,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Questa email richiede al controllore di un archivio LOCKSS di considerare di includere questo journal nei loro archivi. Questa fornisce una URL al LOCKSS Publisher Manifest del journal.',
  'emails.lockssNewArchive.subject' => 'Archiviare richiesta per {$contextName}',
  'emails.lockssNewArchive.body' => 'Cara [biblioteca universitaria]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt;, &amp;amp;#x00E8; un journal per cui un membro della vostra facolt&amp;amp;#x00E0;, [nome del membro], presta servizio come [posizione]. Il journal sta cercando di instaurare un archivio condiviso LOCKSS (Lots of Copies Keep Stuff Safe) con questa e altre biblioteche universitarie.<br />
<br />
[Breve descrizione del journal]<br />
<br />
Il programma LOCKSS &amp;lt;http://lockss.org/&amp;gt;, una iniziativa biblioteca/editore, &amp;amp;#x00E8; un esempio funzionante di un deposito distribuito di preservazione e archiviazione, dettagli aggiuntivi sono di sotto. Il software, che funziona su personal computer ordinario &amp;amp;#x00E8; libero; il sistema &amp;amp;#x00E8; portato facilmente on-line; la manutenzione continua &amp;amp;#x00E8; pochissima.<br />
<br />
Per assistere nell\'archiviazione del nostro journal, vi invitiamo a diventare membri della comunit&amp;amp;#x00E0; LOCKSS, per aiutare a collezionare e preservare titoli prodotti dalla vostra facolt&amp;amp;#x00E0; e di altri studiosi a livello mondiale. Per fare questo, si prega di avere qualcuno nel vostro staff che visiti il sito LOCKSS per informazioni su come il sistema opera. Aspetto con impazienza di sentire a voi la possibilit&amp;amp;#x00E0; di fornire questo supporto di archiviazione per questo journal.<br />
<br />
Grazie,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Questa email incoraggia il destinatario a partecipare all\'iniziativa LOCKSS e a includere questo journal nell\'archivio. Questa fornisce informazioni sull\'iniziativa LOCKSS e sui modi per farne parte.',
  'emails.submissionAck.subject' => 'Proposta ricevuta',
  'emails.submissionAck.body' => 'Gentile {$authorName},<br />
<br />
Grazie per aver inviato il suo contributo &quot;{$submissionTitle}&quot; alla testata  {$contextName}. Potrà il processo di revisione del suo manoscritto attraverso portale utilizzando la sua login al sito:<br />
<br />
URL della proposta: {$submissionUrl}<br />
Username: {$authorUsername}<br />
<br />
Per qualsiasi domanda non esiti a contattarmi.<br />
La ringrazio per la preferenza espressa nei confronti di {$contextName}.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Questa email, quando è abilitata, viene inviata automaticamente all\'autore quando viene completato il processo di sottomissione del manoscritto. Fornisce informazioni su come tracciare il manoscritto e ringrazia l\'autore per la proposta.',
  'emails.submissionAckNotUser.subject' => 'Proposta ricevuta',
  'emails.submissionAckNotUser.body' => 'Salve,<br />
<br />
{$submitterName} ha inviato un manoscritto dal titolo &quot;{$submissionTitle}&quot; alla rivista {$contextName}. <br />
<br />
Qualsiasi domanda abbia, chieda pure. Grazie per aver considerato la rivista per pubblicare il vostro lavoro.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.description' => 'Questa mail, quando abilitata, è inviata in automatico agli altri autori di un lavoro che non sono utenti dell\'OJS in questione quanto un lavoro viene sottomesso a una rivista.',
  'emails.editorAssign.subject' => 'Assegnazione  della proposta',
  'emails.editorAssign.body' => 'Gentile {$editorialContactName},<br />
<br />
La submission, &quot;{$submissionTitle},&quot; a {$contextName} ti è stata assegnata come Section Editor.<br />
<br />
Submission URL: {$submissionUrl}<br />
Username: {$editorUsername}<br />
<br />
Grazie.',
  'emails.editorAssign.description' => 'Questa email notifica ai section editor che l\'editor ha assegnato loro il compito di supervisionare una submission attraverso il processo editoriale. Questa fornisce informazioni sulla submission e su come accedere al sito del journal.',
  'emails.reviewRequest.subject' => 'Richiesta di revisione di un articolo',
  'emails.reviewRequest.body' => '<br />Gentile {$reviewerName},<br />
<br />
Desidero invitarti alla  revisione del manoscritto &quot;{$submissionTitle},&quot; che è stato sottomesso per la pubblicazione {$contextName}. L\'abstract del manoscritto  è inserito in calce. Spero che vorrai prendere in carico questo compito.<br />
<br />
Ti chiedo quindi di effettuare il log in al sito web della rivista entro il {$responseDueDate} per indicare se prenderai in carico la revisione o meno.<br />
Potrai poi accedere alla submission e inviare il tuo parere. Il sito web è {$contextUrl}<br />
<br />
La data di scadenza per la revisione è fissata al {$reviewDueDate}.<br />
<br />
Se non hai una username and password per il sito web della rivista, puoi usare questo link per resettare la  password (che ti sarà quindi mandata per email insieme con la username). {$passwordResetUrl}<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Grazie per la tua collaborazione.<br />
<br />
{$editorialContactSignature}<br />
<br />
======<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
Abstract<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Questa email dal section editor al revisore richiede che quest\'ultimo accetti o rifiuti il compito di revisionare una proposta. Fornisce informazioni sulla submission quali il titolo e l\'abstract, una data attesa per la revisione, e su come accedere alla submission stessa. Questo messaggio è usato quando il processo Standard di revisione è selezionato nel Journal Setup, fase 2. (Altrimenti vedi  ALLEGATA_RICHIESTA_REVISIONE.)',
  'emails.reviewRequestRemindAuto.subject' => 'Sollecito relativo all\'invito alla revisione',
  'emails.reviewRequestRemindAuto.body' => 'Gentilissimo {$reviewerName}:<br />
Solo una gentile ricordo della nostra richiesta di revisione della proposta &quot;{$submissionTitle},&quot; per la rivista {$contextName}. 
Speravamo di una sua risposta per il {$responseDueDate}, e questa mail è stata inviata automaticamente visto che la data è passata.
<br />
Riteniamo che lei possa fare un\'ottima revisione della proposta. L\'abstract della proposta è inserito qui sotto, e speriamo che lei consideri di fare questo importante lavoro per noi.<br />
<br />
Le chiederemmo di entrare nel sito web della rivista e indicare se porterà avanti o no la revisione, cosi come può accedere alla proposta, registrare la sua revisione e scrivere la sua valutazione. Il sito web è: {$contextUrl}<br />
<br />
La revisione serve entro il {$reviewDueDate}.<br />
<br />
Se non ha le sue username e password per il sito, può ridefinire la password con questo link (che manderà una mail al suo indirizzo con il suo username): {$passwordResetUrl}<br />
<br />
URL della proposta: {$submissionReviewUrl}<br />
<br />
La ringrazio per aver preso in considerazione  questa richiesta.<br />
<br />
{$editorialContactSignature}<br />
<br />
Dati della proposta:
<br/>
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Questa mail parte automaticamente quanto la data di conferma di un revisore scade (vedi opzioni di revisione sotto Impostazioni > Flusso di lavoro > Revisione) e l\'accesso alla revisione \'one-click\' è disabilitato. I compiti programmati devono essere abilitati e configurati (vedi il file di configurazione del sito).',
  'emails.reviewRequestOneclick.subject' => 'Richiesta di revisione di un articolo',
  'emails.reviewRequestOneclick.body' => 'Gentile {$reviewerName}:<br />
<br />
Ti propongo la revisione del manoscritto &quot;{$submissionTitle},&quot; che è stato inviato a {$contextName}. L\'abstract della proposta è più sotto. Spero che vorrai prendere in carico questo compito.<br />
<br />
Ti chiedo quindi di effettuare il log in al sito web della rivista entro il {$responseDueDate} per indicare se prenderai in carico la revisione o meno. Potrai poi accedere alla submission e inviare il tuo parere.<br />
<br />
La data di scadenza per la revisione è fissata al {$reviewDueDate}.<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Grazie per la tua collaborazione<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
Abstract<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Questa email dal section editor al revisore richiede che quest\'ultimo accetti o rifiuti il compito di revisionare una proposta. Fornisce informazioni sulla proposta quali il titolo e l\'abstract, una data attesa per la revisione, e su come accedere alla proposta stessa. Questo messaggio è usato quando il processo standard di revisione è selezionato nel Journal Setup, e il accesso one-click del revisore è attivato.',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Ricordo della richiesta di revisione',
  'emails.reviewRequestRemindAutoOneclick.body' => 'Gentilissimo {$reviewerName}:<br />
Solo una gentile ricordo della nostra richiesta di revisione della proposta &quot;{$submissionTitle},&quot; per la rivista {$contextName}. 
Speravamo di una sua risposta per il {$responseDueDate}, e questa mail è stata inviata automaticamente visto che la data è passata.
<br />
Riteniamo che lei possa fare un\'ottima revisione della proposta. L\'abstract della proposta è inserito qui sotto, e speriamo che lei consideri di fare questo importante lavoro per noi.<br />
<br />
Le chiederemmo di entrare nel sito web della rivista e indicare se porterà avanti o no la revisione, cosi come può accedere alla proposta, registrare la sua revisione e scrivere la sua valutazione. <br />
<br />
La revisione serve entro il {$reviewDueDate}.<br />
<br />
URL della proposta: {$submissionReviewUrl}<br />
<br />
La ringrazio per aver preso in considerazione  questa richiesta.<br />
<br />
{$editorialContactSignature}<br />
<br />
Dati della proposta:
<br/>
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Questa mail parte automaticamente quanto la data di conferma di un revisore scade (vedi opzioni di revisione sotto Impostazioni > Flusso di lavoro > Revisione) e l\'accesso alla revisione \'one-click\' è abilitato. I compiti programmati devono essere abilitati e configurati (vedi il file di configurazione del sito).',
  'emails.reviewRequestAttached.subject' => 'Richiesta di revisione di un articolo',
  'emails.reviewRequestAttached.body' => 'Gentilissimo {$reviewerName}:<br />
<br />
Desidero invitarti alla revisione del manoscritto &quot;{$submissionTitle}&quot;.<br />
Le linee guida per la revisione sono indicate sotto e il manoscritto è allegato.<br />
<br />
Puoi comunicarmi il tuo parere per email entro il {$reviewDueDate}.<br />
<br />
Ti chiedo di farmi sapere entro il {$responseDueDate} se accetti o meno l\'incarico di revisione.<br />
<br />
Grazie per la tua collaborazione<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Linee guida per le revisioni<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.description' => 'Questa email viene inviata dal section editor al revisore richiedendo a quest\'ultimo di accettare o rifiutare il compito di revisionare una proposta. Include la submission come allegato. Questo messaggio è usato il processo di revisione degli allegati Email è selezionato nel Journal Setup, fase 2. (Altrimenti vedi RICHIESTA_REVISIONE.)',
  'emails.reviewRequestSubsequent.subject' => 'Richiesta di fare una revisione',
  'emails.reviewRequestSubsequent.body' => 'Gentile {$reviewerName}:<br />
<br />
ti scrivo riguardo alla proposta &quot;{$submissionTitle},&quot; che è in revisione per essere pubblicata in {$contextName}.<br />
<br />
Seguendo i suggerimenti emersi in precedenza, l\'autore ha modificato il manoscritto e inviato una nuova versione. Ti sarei grato se volessi aiutarci a valutarla.<br />
<br />
Ti prego quindi di accedere al sito entro il {$responseDueDate} per comunicare se ti incaricherai o meno della revisione e poi per accedere alla proposta e registrare il tuo parere. Il sito è {$contextUrl}<br />
<br />
La data di scadenza per l\'incarico di revisione è il {$reviewDueDate}.<br />
<br />
Se non ricordi la tua username e password, puoi utilizzare la funzione di reset password: {$passwordResetUrl}<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Ti ringrazio della considerazione<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.description' => 'Questo messaggio viene inviato dall\'editor a un revisore chiedendogli di accettare o rifiutare l\'incarico di revisione di una proposta per un secondo o successivo round di revisione. Esso fornisce informazioni come il titolo e l\'abstract, una data di scadenza e modalità di accesso alla stessa proposta. Questo messaggio viene utilizzato quando il processo di revisione standard è stato selezionato nel setup. (In caso contrario vedi REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)',
  'emails.reviewRequestOneclickSubsequent.subject' => 'Richiesta di revisione di un articolo',
  'emails.reviewRequestOneclickSubsequent.body' => 'Gentile {$reviewerName}:<br />
<br />
Ti scrivo riguardo al manoscritto &quot;{$submissionTitle},&quot; in corso di revisione per eventuale pubblicazione in {$contextName}.<br />
<br />
L\'autore ha inviato una nuova versione, modificata secondo i suggerimenti ricevuti dai revisori. Tu sarei grato se volessi aiutarci a valutarla.<br />
<br />
Ti chiedo di autenticarti al sito {$responseDueDate} per indicarmi se intendi accettare l\'incarico o meno e poi per accedere alla proposta e registrare il tuo parere.<br />
<br />
La data di scadenza è il {$reviewDueDate}.<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Ti ringrazio per la disponibilità<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.description' => 'Questo messaggio viene inviato dall\'editor a un revisore chiedendogli di accettare o rifiutare l\'incarico di revisione di una proposta per un secondo o successivo ciclo di revisione.Fornisce informazioni come il titolo e l\'abstract, una data di scadenza e modalità di accesso al manoscritto. Questo messaggio viene utilizzato quando il processo di revisione standard è stato selezionato nel Setup ed è abilitato l\'accesso oneclick.',
  'emails.reviewRequestAttachedSubsequent.subject' => 'Richiesta di revisione di un articolo',
  'emails.reviewRequestAttachedSubsequent.body' => 'Gentile {$reviewerName}:<br />
<br />
Ti scrivo riguardo al manoscritto &quot;{$submissionTitle},&quot; proposto per la pubblicazione in {$contextName}.<br />
<br />
Seguendo i suggerimenti ricevuti dai revisori, l\'autore ha inviato una nuova versione modificata. Ti sarei grato se ci aiutassi a valutarla.<br />
<br />
Più sotto trovi le Linee guida sulla revisione e il file del manoscritto è in allegato. Puoi inviarmi la revisione e il tuo parere sulla proposta via email, entro il  {$reviewDueDate}.<br />
<br />
Perfavore informami entro il {$responseDueDate} se accetti o meno l\'incarico.<br />
<br />
Grazie della disponibilià<br />
{$editorialContactSignature}<br />
<br />
<br />
Linee guida sulla revisione<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.description' => 'Questo messaggio viene inviato dall\'editor a un revisore chiedendogli di accettare o rifiutare l\'incarico di revisione di una proposta per un secondo o successivo round di revisione. Contiene in allegato il file del manoscritto. Questo messaggio viene utilizzato quando è stato selezionato nel Setup, il processo di revisione con allegati email. (In caso contrario vedi REVIEW_REQUEST_SUBSEQUENT.)',
  'emails.reviewCancel.subject' => 'Cancellazione richiesta di revisione',
  'emails.reviewCancel.body' => 'Gentile {$reviewerName}:<br />
<br />
Abbiamo deciso di cancellare la nostra richiesta di revisione della proposta, &quot;{$submissionTitle},&quot; per {$contextName}.<br />
<br />
Ci scusiamo per qualsiasi disturbo possiamo aver causato speriamo di poter contare su di te in una prossima occasione.<br />
<br />
Se hai qualsiasi richiesta, ti prego di contattarmi.',
  'emails.reviewCancel.description' => 'Questa email viene inviata dal section editor al revisore che ha una  revisione di una proposta in corso per fargli sapere che la revisione è stata cancellata.',
  'emails.reviewReinstate.subject' => 'Invito alla revisione ripristinato',
  'emails.reviewReinstate.body' => '{$reviewerName}:<br />
<br />
E\' stato ripristinato l\'invito alla revisione per il manoscritto &quot;{$submissionTitle},&quot; per la testata {$contextName}.  Ci auguriamo che le sia possibile contribuire a questo ciclo di revisione e rimaniamo a sua disposizione per qualsiasi chiarimento.',
  'emails.reviewReinstate.description' => 'Questa mail è inviata dal Section Editor al revisore con una revisione in corso per avvisarlo che l\'invito alla revisione cancellato è stato ripristinato.',
  'emails.reviewConfirm.subject' => 'Accettazione incarico di revisione',
  'emails.reviewConfirm.body' => 'Gentile Editor,<br />
<br />
Accetto l\'incarico di revisionare &quot;{$submissionTitle},&quot; per {$contextName}.<br />
Penso di completare la revisione per la data che mi avete comunicato, {$reviewDueDate}, se non prima.<br />
<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Questa email viene mandata dal revisore  al section editor in risposta a una richiesta di revisione per far sapere a quest\'ultimo che la richiesta è stata accettata e sarà completata alla data specificata.',
  'emails.reviewDecline.subject' => 'Rifiuto incarico di revisione',
  'emails.reviewDecline.body' => 'Egregia redazione:<br />
<br />
Sono spiacente di non poter revisionare la proposta, &quot;{$submissionTitle},&quot; per {$contextName}. Spero che ci siano future occasioni di collaborazione.<br />
<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Questa email viene mandata dal revisore al section editor in risposta a una richiesta di revisione per far sapere a quest\'ultimo che la richiesta è stata declinata.',
  'emails.reviewAck.subject' => 'Ringraziamenti per la revisione',
  'emails.reviewAck.body' => 'Gentile {$reviewerName}:<br />
<br />
Grazie per aver completato la revisione del manoscritto &quot;{$submissionTitle},&quot; per {$contextName}. Apprezziamo il tuo contributo nel mantenere alta la qualità della rivista.',
  'emails.reviewAck.description' => 'Questa email viene inviata dal section editor per confermare la ricezione di una revisione completata e per ringraziare i revisori per i loro contributi.',
  'emails.reviewRemind.subject' => 'Promemoria revisione in attesa',
  'emails.reviewRemind.body' => 'Gentile {$reviewerName}:<br />
<br />
Ti ricordo la richiesta di revisione della submission, &quot;{$submissionTitle},&quot; per {$contextName}. La data di scadenza prevista è {$reviewDueDate}.<br />
<br />
Se non hai una username and password per il sito web della rivista, puoi usare questo link per resettare la  password (che ti sarà quindi mandata per email insieme con la username). {$passwordResetUrl}<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Ti chiedo la cortesia di di confermare la volontà di portare a termine l\'incarico.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Questa email viene mandata da un section editor per ricordare al revisore che è attesa la revisione.',
  'emails.reviewRemindOneclick.subject' => 'Promemoria revisione in attesa',
  'emails.reviewRemindOneclick.body' => 'Gentile {$reviewerName},<br />
<br />
Ti ricordo la richiesta di revisione della submission, &quot;{$submissionTitle},&quot; per {$contextName}. La data di scadenza prevista è {$reviewDueDate}.<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Ti chiedo la cortesia di confermare al più presto la tua disponibilità a portare a termine l\'incarico o meno.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Questa email viene mandata da un section editor per ricordare al revisore che è attesa la revisione.',
  'emails.reviewRemindAuto.subject' => 'Promemoria automatico revisione in attesa',
  'emails.reviewRemindAuto.body' => 'Gentile {$reviewerName},<br />
<br />
Questo è un promemoria automatico della richiesta di revisione del manoscritto &quot;{$submissionTitle},&quot; per {$contextName}.<br />
<br />
Scadenza prevista:  {$reviewDueDate}.<br />
<br />
Puoi usare questo link per resettare la  password (che ti sarà quindi mandata per email insieme con la username). {$passwordResetUrl}<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Ti chiedo la cortesia di confermare al più presto la tua disponibilità di prendere in carico questo incarico.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Questa email viene mandata automaticamente quando una data di revisionee scade (vedi opzioni del revisore nel Impostazioni > Flusso di lavoro > Revisione) e l\'accesso one-click del revisore è disattivato. I compiti programmati devono essere abilitati e configurati (vedi il file di configurazione del sito).',
  'emails.reviewRemindAutoOneclick.subject' => 'Promemoria automatico revisione in attesa',
  'emails.reviewRemindAutoOneclick.body' => 'Gentile {$reviewerName},<br />
<br />
Questo è un promemoria automatico della richiesta di revisione della submission &quot;{$submissionTitle},&quot; per {$contextName}.<br />
<br />
Scadenza prevista:  {$reviewDueDate}.<br />
<br />
Submission URL: {$submissionReviewUrl}<br />
<br />
Ti chiedo la cortesia di confermare al più presto la tua disponibilità di portare a termine l\'incarico o meno.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Questa email viene mandata automaticamente quando una data di revisionee scade (vedi opzioni del revisore nel Journal Setup, passo 2) e l\'accesso one-click del revisore è attivato. I compiti programmati devono essere abilitati e configurati (vedi il file di configurazione del sito).',
  'emails.editorDecisionAccept.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionAccept.body' => '&lt;![CDATA[{$authorName}:<br />
<br />
Abbiamo raggiunto una decisione riguardo alla Sua submission a {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
La decisione è di accettare la proposta',
  'emails.editorDecisionAccept.description' => 'Questa mail è inviata dall\'Editor o Section Editor ad un autore per avvisarlo che è stata presa la decisione finale di accettare il manoscritto per la pubblicazione.',
  'emails.editorDecisionSendToExternal.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionSendToExternal.body' => 'Gentilissimo {$authorName}:<br />
<br />
Abbiamo preso una decisione circa la tua proposta a {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
La nostra decisione: invio a un revisore esterno<br />
<br />
Submission URL: {$submissionUrl}',
  'emails.editorDecisionSendToExternal.description' => 'Questa mail è inviata dall\'Editor o dal Section Editor all\'autore quando il manoscritto viene assegnato ad un revisore.',
  'emails.editorDecisionSendToProduction.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionSendToProduction.body' => 'Gentilissimo {$authorName}:<br />
<br />
La lavorazione editoriale della sua proposta, &quot;{$submissionTitle},&quot; è completa.  Ora viene preparata per l\'uscita sulla rivista.<br />
<br />
URL proposta: {$submissionUrl}',
  'emails.editorDecisionSendToProduction.description' => 'Questa mail è inviata dall\'editor o dall\'editor di sezione all\'autore quando una proposta è stata sistemata dal punto di vista editoriale.',
  'emails.editorDecisionRevisions.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionRevisions.body' => '&lt;![CDATA[{$authorName}:<br />
<br />
Abbiamo raggiunto una decisione sulla Sua proposta a {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
La nostra decisione: è necessaria ciclo di peer-review',
  'emails.editorDecisionRevisions.description' => 'Questa mail è inviata dall\'Editor o dal Section Editor  all\'autore quando il manoscritto deve essere revisionato dopo la revisione.',
  'emails.editorDecisionResubmit.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionResubmit.body' => '{$authorName}:<br />
<br />
Abbiamo raggiunto una decisione riguardo alla Sua submission a {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
La decisione è: mandarla di nuovo in revisione',
  'emails.editorDecisionResubmit.description' => 'Messaggio dell\'editor all\'autore per informarlo della decisione conclusiva sulla proposta inviata.',
  'emails.editorDecisionDecline.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionDecline.body' => '{$authorName}:<br />
<br />
Abbiamo raggiunto una decisione riguardo alla Sua submission a {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
La decisione è di non accettare la proposta',
  'emails.editorDecisionDecline.description' => 'Questa mail è inviata dall\'editor o dall\'editor di sezione all\'autore per non accettare una proposta.',
  'emails.editorRecommendation.subject' => 'Raccomandazione dell\'editor',
  'emails.editorRecommendation.body' => '{$editors}:<br />
<br />
La raccomandazione riguardo la proposta &quot;{$submissionTitle}&quot;, giunta per  {$contextName}, è: {$recommendation}',
  'emails.editorRecommendation.description' => 'Mail che l\'editor invia al responsabile contenente la raccomandazione su cosa fare di una certa proposta.',
  'emails.copyeditRequest.subject' => 'Assegnazione di copyediting',
  'emails.copyeditRequest.body' => '{$participantName}:<br />
<br />
Ti chiedo di prendere in carico il copyediting del manoscritto &quot;{$submissionTitle}&quot; inviato alla testata {$contextName}.<br />
Il documento si trova su sito web della rivista, insieme alle istruzioni per il copyediting.<br />
Se non puoi prendere in carico il lavoro in questo periodo o hai qualche domanda, ti prego di contattarmi.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
URL Manoscritto: {$submissionUrl}<br />
Username: {$participantUsername}<br />',
  'emails.copyeditRequest.description' => 'Questa email viene mandata dal section editor al copyeditor della submission per richiedere che comincino con il processo di copyedit. Questa fornisce informazioni sulla submission e su come accedervi.',
  'emails.layoutRequest.subject' => 'Richiesta preparazione delle bozze',
  'emails.layoutRequest.body' => '{$participantName}:<br />
<br />
Vorrei chiederti di preparare le bozze per il manoscritto &quot;{$submissionTitle}&quot; per {$contextName}.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
URL manoscritto: {$submissionUrl}<br />
Username: {$participantUsername}<br />
<br />
Se non puoi prendere in carico il lavoro in questo periodo o hai qualche domanda, ti prego di contattarmi. 
<br />
Grazie per la tua collaborazione.',
  'emails.layoutRequest.description' => 'Questa email dal section editor al layout editor notifica che è stato assegnato loro il compito di curare il layout di una submission. Questa fornisce informazioni sulla submission e su come accedervi.',
  'emails.layoutComplete.subject' => 'Bozze pronte',
  'emails.layoutComplete.body' => '{$editorialContactName}:<br />
<br />
Sono pronte le bozze dell\'articolo, &quot;{$submissionTitle}&quot; per {$contextName}, a disposizione per i correttori di bozze.<br />
<br />
Per qualsiasi domanda, si prega di contattarmi.<br />
<br />
{$participantName}',
  'emails.layoutComplete.description' => 'Questa email dal layout editor al section editor notifica che il processo di layout è stato completato.',
  'emails.emailLink.subject' => 'Ti suggerisco la lettura di un articolo',
  'emails.emailLink.body' => 'Penso che potrebbe interessarti la lettura di:<br />
 &quot;{$submissionTitle}&quot; di {$authorName}<br />
pubblicato in {$contextName}, Vol. {$volume}, N. {$number} ({$year}) e disponibile all\'indirizzo &quot;{$articleUrl}&quot;.',
  'emails.emailLink.description' => 'Questo modello  email fornisce ad un utente registrato l\'opprtunità di inviare informazioni su un articolo a qualcuno che potrebbe essere interessato. E\' disponibile via utility di lettura e e deve essere abilitata dall\'amministratore della rivista nella pagina di amministrazione delle utility di lettura.',
  'emails.subscriptionNotify.subject' => 'Notifica di abbonamento',
  'emails.subscriptionNotify.body' => 'Gentile{$subscriberName}:<br />
<br />
il tuo abbonamento a {$contextName} è stato attivato con le seguenti caratteristiche:<br />
<br />
{$subscriptionType}<br />
<br />
Per accedere al contenuto riservato agli abbonati, effettua semplicemente il log in al sistema con il tuo username, &quot;{$username}&quot;.<br />
<br />
Una volta effettuato il log in potrai modificare in ogni momento i dettagli del profilo e la password.<br />
<br />
Gli utenti istituzionali vengono riconosciuti automaticamente dal sistema.<br />
<br />
Per qualsiasi domanda non esitare a contattarmi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Questa email notifica ai lettori registrati che l\'amministratore ha attivato un abbonamento per loro. Questa fornisce la URL del journal insieme con le istruzioni per l\'accesso.',
  'emails.openAccessNotify.subject' => 'Nuovo fascicolo disponibile ad accesso aperto',
  'emails.openAccessNotify.body' => 'Gentile lettore,<br />
<br />
{$contextName} ha appena reso disponibile in modalità open access una nuova uscita. Ti invitiamo dunque a visitare il sito web ({$contextUrl}) per trovare articoli e altre risorse di tuo interesse.<br />
<br />
Grazie per il tuo interesse per la nostra testata<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Questa email viene inviata ai lettori registrati che hanno chiesto di ricevere un\'email di notifica in caso di uscite ad accesso aperto.',
  'emails.subscriptionBeforeExpiry.subject' => 'Avviso di abbonamento in scadenza',
  'emails.subscriptionBeforeExpiry.body' => 'Gentile {$subscriberName}:<br />
<br />
Il suo abbonamento a {$contextName} sta per scadere.<br />
<br />
{$subscriptionType}<br />
Data di scadenza: {$expiryDate}<br />
<br />
Per continuare ad accedere a questa rivista, si rechi sul sito e rinnovi l\'abbonamento. Per l\'accesso utilizzi la sua username, &quot;{$username}&quot;.<br />
<br />
Per qualsiasi domanda e ulteriore informazione, non esiti a contattarmi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Questa email informa un abbonato della prossima scadenza del suo abbonamento. Fornisce la URL della rivista e le istruzioni per l\'accesso.',
  'emails.subscriptionAfterExpiry.subject' => 'Abbonamento scaduto',
  'emails.subscriptionAfterExpiry.body' => 'Gentile {$subscriberName}:<br />
<br />
Il suo abbonamento a  {$contextName} è scaduto.<br />
<br />
{$subscriptionType}<br />
Data di scadenza: {$expiryDate}<br />
<br />
Per rinnovare l\'abbonamento, si rechi sul nostro sito. Per l\'accesso utilizzi la sua username, &quot;{$username}&quot;.<br />
<br />
Per qualsiasi domanda e ulteriore informazione, non esiti a contattarmi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.description' => 'Questa email informa un abbonato che il suo abbonamento a  è scaduto. Fornisce la URL della rivista e le istruzioni per l\'accesso.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Abbonamento scaduto - Ultimo avviso',
  'emails.subscriptionAfterExpiryLast.body' => 'Gentilissimo {$subscriberName}:<br />
<br />
Il suo abbonamento a  {$contextName} è scaduto.<br />
Questo è l\'ultimo avviso che le inviamo.<br />
<br />
{$subscriptionType}<br />
Data di scadenza: {$expiryDate}<br />
<br />
Per rinnovare l\'abbonamento visiti il sito della testata. Per l\'accesso utilizzi il suo username &quot;{$username}&quot;.<br />
<br />
<br />
Per qualsiasi domanda e ulteriore informazione, non esiti a contattarci.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Questa email informa un abbonato che il suo abbonamento a  è scaduto. Fornisce la URL della rivista e le istruzioni per l\'accesso.',
  'emails.subscriptionPurchaseIndl.subject' => 'Acquisto di un abbonamento individuale',
  'emails.subscriptionPurchaseIndl.body' => 'E\' stato acquistato online un abbonamento individuale a {$contextName} con i seguenti dettagli:<br />
<br />
Tipo di abbonamento:<br />
{$subscriptionType}<br />
<br />
Utente:<br />
{$userDetails}<br />
<br />
Membership (se indicato):<br />
{$membership}<br />
<br />
Per vedere o modificare i dettagli dell\'abbonamento, vai alla pagina: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.description' => 'Questo messaggio informa il Subscription manager che è stato acquistato online un nuovo abbonamento individuale. Informa sulla procedura e fornisce un link all\'abbonamento acquistato.',
  'emails.subscriptionPurchaseInstl.subject' => 'Acquisto di un abbonamento istituzionale',
  'emails.subscriptionPurchaseInstl.body' => 'E\' stato acquistato un abbonamento istituzionale a {$contextName} con i dettagli indicati sotto. Per attivare l\'abbonamento, utilizzare il link fornito sotto e selezionare lo status \'Attivo\'per tale abbonamento.<br />
<br />
Tipo di abbonamento:<br />
{$subscriptionType}<br />
<br />
Ente:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Dominio (se indicato):<br />
{$domain}<br />
<br />
IP Ranges (se indicato):<br />
{$ipRanges}<br />
<br />
Contattare:<br />
{$userDetails}<br />
<br />
Membership (se indicato):<br />
{$membership}<br />
<br />
Per vedere o modificare i dettagli, andare alla pagina: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.description' => 'Questo messaggio iforma il Subscription manager che è stato acquistato online un nuovo abbonamento istituzionale. Informa sulla procedura e fornisce un link all\'abbonamento acquistato.',
  'emails.subscriptionRenewIndl.subject' => 'Rinnovo dell\'abbonamento individuale',
  'emails.subscriptionRenewIndl.body' => 'E\' stato rinnovato online un abbonamento individuale a {$contextName} con i seguenti dettagli.<br />
<br />
Tipo di abbonamento:<br />
{$subscriptionType}<br />
<br />
Utente:<br />
{$userDetails}<br />
<br />
Membership (se indicato):<br />
{$membership}<br />
<br />
Per vedere o modificare i dettagli dell\'abbonamento, vai alla pagina: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.description' => 'Notifica del rinnovo di un abbonamento individuale.',
  'emails.subscriptionRenewInstl.subject' => 'Rinnovo dell\'abbonamento istituzionale',
  'emails.subscriptionRenewInstl.body' => 'E\' stato rinnovato online un abbonamento istituzionale a {$contextName} con i seguenti dettagli.<br />
<br />
Tipo di abbonamento:<br />
{$subscriptionType}<br />
<br />
Ente:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Dominio (se fornito):<br />
{$domain}<br />
<br />
IP Ranges (se indicato):<br />
{$ipRanges}<br />
<br />
Contattare:<br />
{$userDetails}<br />
<br />
Membership (se indicato):<br />
{$membership}<br />
<br />
Per vedere o modificare i dettagli, andare alla pagina: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.description' => 'Notifica del rinnovo di un abbonamento istituzionale.',
  'emails.citationEditorAuthorQuery.subject' => 'Richiesta di verifica delle citazioni',
  'emails.citationEditorAuthorQuery.body' => 'Gentile {$authorFirstName},<br />
<br />
Ti chiedo la cortesia di verificare la correttezza delle citazioni contenute nell\'articolo  {$submissionTitle}:<br />
<br />
{$rawCitation}<br />
<br />
Grazie,<br />
<br />
{$userFirstName}<br />
Copy-Editor, {$contextName}<br />
',
  'emails.citationEditorAuthorQuery.description' => 'Questo messaggio permette al copyeditor di chiedere a un autore ulteriori informazioni sulle citazioni bibliografiche.',
  'emails.revisedVersionNotify.subject' => 'Caricamento di versione revisionata',
  'emails.revisedVersionNotify.body' => 'Caro editor:<br />
<br />
L\'autore {$authorName} ha caricato una versione revisionata di &quot;{$submissionTitle}&quot;.<br />
<br />
Submission URL: {$submissionUrl}<br />
<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.description' => 'Questo messaggio viene inviato automaticamente all\'Editor quando un autore invia una versione revisionata del proprio articolo.',
  'emails.notificationCenterDefault.subject' => 'Un messaggio da  {$contextName}',
  'emails.notificationCenterDefault.body' => 'Inserisci  qui il testo del tuo messaggio.',
  'emails.notificationCenterDefault.description' => 'Questo messaggio vuoto è usato dal sistema centralizzato di messaggistica via lista.',
  'emails.editorDecisionInitialDecline.subject' => 'Decisione dell\'editor',
  'emails.editorDecisionInitialDecline.body' => '
			Gentilissimo {$authorName}:<br />
<br />
Abbiamo preso una decisione in merito al suo manoscritto dal titolo &quot;{$submissionTitle}&quot; inviato a {$contextName} .<br />
<br />
Ci rincresce informarla che non ci è possibile accettare il suo contributo',
  'emails.editorDecisionInitialDecline.description' => 'Questa mail viene mandata all\'autore se la proposta subito non viene accettata dall\'editor',
  'emails.statisticsReportNotification.subject' => 'Attività editorial e per {$month}, {$year}',
  'emails.statisticsReportNotification.body' => '
{$name}, <br />
<br />
E\' disponibile il report per il mese di  {$month}, {$year} e di seguito sono indicate le statistiche principali<br />
<ul>
	<li>nuovi contributi ricevuti: {$newSubmissions}</li>
	<li>manoscritti rigettati: {$declinedSubmissions}</li>
	<li>manoscritti accettati: {$acceptedSubmissions}</li>
	<li>manoscritti totali nel sistema: {$totalSubmissions}</li>
</ul>
Accedi al sito per consultare gli <a href="{$editorialStatsLink}">editorial trends</a> e il  <a href="{$publicationStatsLink}">report degli articoli pubblicati</a>. Il report completo dell\'attività editoriale del mese è allegata.<br />
<br />
Distinti saluti,<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.description' => 'Questo report sull\'attività del sistema è inviato via email  mensilmente in automatico agli editors.',
  'emails.announcement.subject' => '{$titolo}',
  'emails.announcement.body' => '<b>{$title}</b><br />
<br />
{$summary}<br />
<br />
Visita il nostro sito per leggere la  <a href="{$url}">news completa</a>.',
  'emails.announcement.description' => 'Questo messaggio è inviato quando viene creata una nuova news.',
  'emails.submissionUnsuitable.subject' => 'Proposta non idonea',
  'emails.submissionUnsuitable.body' => '
{$authorName}:<br />
"
/>
"
revisione iniziale di &quot;{$submissionTitle}&quot; ha rilevato che "
proposta non rientra nello scopo e nel focus di {$contextName}. Le "
di consultare meglio la sezione delle informazioni della "
per saperne di più sul genere di contributi che pubblichiamo."
/>
"
comunque considerare di proporre il lavoro ad altra rivista più "
/>
"
/>
"
',
  'emails.submissionUnsuitable.description' => '
email viene inviata quando una proposta viene ritenuta non idonea "
la rivista."',
  'emails.submissionComment.subject' => 'Commento alla submission ',
  'emails.submissionComment.body' => '
/>
"
/>
"
ha aggiunto un commento alla submission, &quot;"
in {$contextName}:<br />
"
/>
"
',
  'emails.submissionComment.description' => '
email notifica a varie persone coinvolte nel processo editoriale "
una submission  che è stato aggiunto un nuovo commento."',
  'emails.submissionDecisionReviewers.subject' => 'Decisione su "{$submissionTitle}"',
  'emails.submissionDecisionReviewers.body' => '
revisore di {$contextName},<br />
"
comunico la decisione e i suggerimenti che abbiamo inviato all\'autore "
proposta &quot;{$submissionTitle}&quot;.<br />
"
/>
"
ancora per il tuo contributo.<br />
"
/>
"
/>
"
/>
"
/>
"
/>
"
',
  'emails.submissionDecisionReviewers.description' => '
email notifica ai revisori di una submission che il processo di "
è stato completato. Include informazioni sull\'articolo e le "
raggiunte, e ringrazia i revisori per i loro contributi."',
  'emails.layoutAck.subject' => 'Ringraziamenti layout',
  'emails.layoutAck.body' => '
/>
"
/>
"
per aver preparato l\'impaginato de manoscritto &quot;"
per {$contextName}.<br />
"
/>
"
',
  'emails.layoutAck.description' => '
email dal section editor al layout editor riconosce il "
del processo di layout e ringrazia il curatore di layout "
il contributo."',
  'emails.proofreadAuthorRequest.subject' => 'Correzione bozze dell\'autore',
  'emails.proofreadAuthorRequest.body' => '
/>
"
/>
"
necessario correggere le bozze del tuo contributo &quot;"
Puoi farlo seguendo queste istruzioni:<br />
"
/>
"
Clicca sulla URL del manoscritto indicata sotto<br />
"
Entra nella rivista e leggi le istruzioni per la correzione delle "
/>
"
Clicca su \'Vedi bozza\'<br />
"
Inserisci le correzioni, limitandoti a quelle tipografiche e al "
nelle Correzioni della bozza\', indicando per ciascuna il numero "
pagina e di riga alle quali si riferiscono<br />
"
Salva le modifiche.<br />
"
Invia all\'editor il messaggio COMPLETATO.<br />
"
/>
"
del contributo: {$submissionUrl}<br />
"
/>
"
',
  'emails.proofreadAuthorRequest.description' => '
mail viene inviata dall\'editor all\'autore per informarlo che è "
correggere le bozze del suo contributo. Fornisce informazioni "
procedura."',
  'emails.proofreadAuthorComplete.subject' => 'Correzione bozze dell\'autore completata',
  'emails.proofreadAuthorComplete.body' => '
/>
"
/>
"
completato la correzione delle bozze del mio manoscritto, &quot;"
for {$contextName}.<br />
"
',
  'emails.proofreadAuthorAck.subject' => 'Ringraziamenti correzione delle bozze (Autore)',
  'emails.proofreadAuthorAck.body' => '
/>
"
/>
"
per aver corretto le bozze dell\'articolo, &quot;{$submissionTitle},"
in {$contextName}.<br />
"
solo di pubblicare il lavoro a breve.<br />
"
/>
"
sottoscrivi il nostro servizio notifiche, riceverai una email non "
il fascicolo verrà pubblicato. Per qualsiasi domanda, contattami "
/>
"
/>
"
',
  'emails.proofreadAuthorAck.description' => '
email dal section editor all\'autore riconosce il completamento del "
iniziale di correzione di bozze e ringrazia per il contributo."',
  'emails.proofreadRequest.subject' => 'Richiesta correzione di bozze',
  'emails.proofreadRequest.body' => '
{$proofreaderName},<br />
"
/>
"
chiederti di corregere le bozze per l\'articolo, &quot;"
per {$contextName}, seguendo queste indicazioni:"
/>
"
/>
"
Clicca sulla URL del manoscritto<br />
"
Entra nella rivista e leggi le istruzioni per la correzione delle "
/>
"
Clicca su \'Vedi bozza\' e correggi le bozze nei vari eventuali "
/>
"
Inserisci le correzioni, limitandoti a quelle tipografiche e al "
in \'Correzioni delle bozze\', indicando per ciascuna il numero di "
e di riga<br />
"
Salva le modifiche<br />
"
Invia all\'editor comunicazione di aver completato l\'incarico.<br />
"
manoscritto: {$submissionUrl}<br />
"
{$proofreaderUsername}<br />
"
/>
"
non puoi prendere in carico il lavoro in questo periodo o hai qualche "
ti prego di contattarmi.<br />
"
/>
"
per il tuo contributo,<br />
"
',
  'emails.proofreadRequest.description' => '
email dal section editor al correttore di bozze richiede che "
la correzione delle bozze di un articolo. Fornisce informazioni "
e su come accedervi."',
  'emails.proofreadComplete.subject' => 'Correzione delle bozze completata',
  'emails.proofreadComplete.body' => '
/>
"
/>
"
completato la correzione delle bozze del contributo &quot;"
per {$contextName}.<br />
"
/>
"
',
  'emails.proofreadComplete.description' => '
email dal correttore di bozze al section editor notifica che il "
di bozze ha completato il processo di correzione."',
  'emails.proofreadAck.subject' => 'Ringraziamenti correzione di bozze',
  'emails.proofreadAck.body' => '
/>
"
/>
"
per la correzione delle bozze per il manoscritto, &quot;"
per {$contextName}. Questo lavoro da un "
importante alla qualità della rivista.<br />
"
/>
"
',
  'emails.proofreadAck.description' => '
email dal section editor al correttore di bozze conferma il "
del processo di correzione do bozze e ringrazia per il "
',
  'emails.proofreadLayoutComplete.subject' => 'Modifica alle bozze completata',
  'emails.proofreadLayoutComplete.body' => '
/>
"
/>
"
bozze dell\'articolo &quot;{$submissionTitle},&quot; per {$contextName} "
state corrette.<br />
"
è ora pronto per essere pubblicato.<br />
"
/>
"
',
  'emails.proofreadLayoutComplete.description' => '
email dal curatore del layout informa che la fase finale di "
delle bozze è stata completata e l\'articolo è pronto per "
pubblicato."',
  'emails.proofreadLayoutAck.subject' => 'Ringraziamenti modifica delle bozze',
  'emails.proofreadLayoutAck.body' => '
/>
"
/>
"
per aver completato la correzione delle bozze associate al "
&quot;{$submissionTitle},&quot; per {$contextName}.<br />
"
/>
"
',
  'emails.proofreadLayoutAck.description' => '
email dal section editor al layout editor riconosce il "
della fase finale della correzione delle bozze e ringrazia "
il contributo."',
  'emails.notificationMaillist.subject' => 'Nuova notifica da {$siteTitle}',
  'emails.notificationMaillist.body' => '
ricevuto una notifica da  {$siteTitle}:<br />
"
/>
"
/>
"
/>
"
{$url}<br />
"
/>
"
/>
"
non vuoi ricevere altre notifiche, vai alla pagina {$unsubscribeLink} "
cancellarti.<br />
"
/>
"
',
  'emails.notificationMaillist.description' => '
mail è inviata agli utenti non registrati alla lista di notifiche."',
  'emails.notificationMaillistWelcome.subject' => 'Benvenuto nella mailing list di {$siteTitle}!',
  'emails.notificationMaillistWelcome.body' => '
chiesto di ricevere notifiche da {$siteTitle}.<br />
"
/>
"
su questo link per confermare e aggiungere il tuo indirizzo nella "
di distribuzione: {$confirmLink}<br />
"
/>
"
non vuoi ricevere email di notifica, vai alla pagina "
per cancellarti.<br />
"
/>
"
',
  'emails.notificationMaillistWelcome.description' => '
messaggio viene inviato a utenti che si sono appena registrati per "
le notifiche."',
);