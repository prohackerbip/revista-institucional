<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Accedi alle opzione per il log',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Crea i file di log',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Attivando questa opzione il plugin creerà dei file di log degli accessi all\'interno della directory dei files. Questi files saranno utilizzato per estrarre le statistiche d\'uso. Se non vuoi creare ulteriori file di accesso, puoi lasciare questa opzione disabilitata e usare i log del server.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Regexp per elaborare i files di log',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'La regexp di default può elaborare i file access di apache nel formato \'combined\' e anche i file generati dak plugin. Se il tuo access file di log è in un formato differente, devi inserire una regexp capace di eleborarlo e estrarre i valori attesi. Guarda nel codice la funzione UsageStatsLoader::_getDataFromLogEntry()  per maggiori informazioni.',
  'plugins.generic.usageStats.settings.saved' => 'Configurazioni del plugin statistiche salvate',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Opzione per la privacy',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Path del file per gestire l\'anonimizzazione (salt)',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'Il file salt non è scrivibile.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Per garantire la privacy del dato, devi specificare un file leggibile e scrivibile dal web che contenga un valore di salt generato in maniera casuale Questo file NON deve essere essere manipolata per garantire la privacy. Il salt è generato casualmente usando: la funzione mcrypt_create_iv, che richiede PHP mcrypt; o  openssl_random_pseudo_bytes, che richiede PHP openssl; o il file /dev/urandom che è presente solo sui sitemi *nix; o infine mt_rand, che non è sicura a livello criptografico. Dunque se stai usando un server Windows, per favore controlla di avere installato PHP mcrypt o di aveve openssl operativo con PHP. In questo modo il salt creato sarà sicuro a livello criptografico.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Attivando questa opzione il plugin rispetterà le legislazioni con maggiori richieste sulla privacy, ad esempio gli IP address saranno loggati sotto forma di hash, gli utenti verranno informati del tracciamento e ci sarà un\'opzione di opt-oui. Attenzione: usando quest\'opzione non sara possibile usare la georeferenziazione.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Attivare la privacy richiede un file di salt.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Attivare la privacy esclude la georeferenziazione \'Città\' dal plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Attivare la privacy esclude la georeferenziazione \'Regione\' dal plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Rispetta la privacy',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Informazioni statistiche opzionali',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Abilita o disabilità la raccolta delle seguenti informazioni opzionali. Questo influenza i report statistiche che puoi elaborare e ha un impatto sulla dimesione del DB. Attenzione: NON CAMBIARLA se non capisci tutte le conseguenze ad ogni livello del cambiamento.',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'La colonna opzionale \'Città\' richiede la colonna opzionale \'Regione\'.',
  'plugins.generic.usageStats.settings.archives' => 'Archivi',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Attivando questa opzione i file di log verranno compressi con gzip, se lo hai configurato nel file config.inc.php. Se hai un sito ad alto traffico, è una buona idea attivare questa opzione, salverà dello spazio sul disco.',
  'plugins.generic.usageStats.settings.compressArchives' => 'Comprimi gli archivi',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Opzioni per la visualizzazione delle statistiche',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Queste configurazioni saranno applicate alle statistiche su {$contextName}.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Visualizzara il grafico sulle proposte ai lettori',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Scegli il tipo di grafico per visualizzare le statistiche dei download',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Barre',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Linea',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Seleziona il massimo numero di dati da presentare nello stesso momento su un specifico asse X. Un valore troppo alto può generare grafici difficili da leggere. Di solito un valore tra 3 e 5 va bene.',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Nome del  task per il carico delle statistiche d\'uso',
  'plugins.generic.usageStats.openFileFailed' => 'Il file {$file} non può essere aperto ed è stato scartato.',
  'plugins.generic.usageStats.invalidLogEntry' => 'La linea numero {$lineNumber} del file {$file} non è una linea di log corretta ed è stata scartata.',
  'plugins.generic.usageStats.removeUrlError' => 'La linea numero {$lineNumber} del file {$file} contiene url non lavorabile.',
  'plugins.generic.usageStats.loadDataError' => 'Non si riesce ad elaborare i dati del file {$file}. Il file è stato riportato nella dir stage di nuovo.',
  'plugins.generic.usageStats.pluginNotEnabled' => 'Plugin per le statistiche non abilitato. I file di log non vengono elaborati.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'La directory {$directory} non è vuota. Questo indica che un processo precedente è fallito o che due processi sono partiti in parallelo. Il file verrà rilavorato in automatico se stai usando anche scheduledTasksAutoStage.xml, altrimenti devi spostare maualmente il file orfano dalla dir processing nella dir stage.',
  'plugins.generic.usageStats.displayName' => 'Statistiche d\'uso',
  'plugins.generic.usageStats.description' => 'Presenta le statistiche d\'uso. Può usare il file access del server per estrarre le statistiche.',
  'plugins.reports.usageStats.report.displayName' => 'Report PKP per le statistiche d\'uso',
  'plugins.reports.usageStats.report.description' => 'Report di default della PKP sulle statistiche d\'uso. E\' conforme a COUNTER',
  'plugins.reports.usageStats.optout.displayName' => 'Informazioni privacy per le statistiche d\'uso',
  'plugins.reports.usageStats.optout.description' => 'Informazioni privacy per le statistiche d\'uso',
  'plugins.generic.usageStats.optout.title' => 'Informazioni sulle statistiche d\'uso',
  'plugins.generic.usageStats.optout.shortDesc' => 'Registriamo statistiche d\'uso in modo anonimo. Per favore leggi la <a href="{$privacyInfo}">privacy</a> per i dettagli.',
  'plugins.generic.usageStats.optout.done' => '
		<p>Hai configurato con successo l\'opt-out dalla registrazione delle statistiche d\'uso. Fino a quando vedrai questo messaggio, on verranno registrate statistiche sul tuo uso di questo sito. Clicca sul bottone qui sotto per annullare questa decisione.</p>',
  'plugins.generic.usageStats.optin' => 'Accetto',
  'plugins.generic.usageStats.optout' => 'Voglio essere escluso',
  'plugins.generic.usageStats.optout.cookie' => '
		<p>Se lo desideri, puoi disattivare la procedura di raccolta dei dati. Facendo clic sul pulsante di disattivazione di seguito, puoi decidere di non essere presente nelle statistiche. Quando si fa clic sul pulsante di disattivazione, sul tuo sistema viene creato un <em> cookie </ em> per memorizzare la tua decisione. Se le impostazioni sulla privacy del tuo browser comportano l\'eliminazione automatica dei cookie, dovrai disattivarti nuovamente la volta successiva che accedi a questo sito web. Il cookie è valido solo per un browser. Se utilizzi un browser diverso, dovrai escluderti di nuovo. Nessuna informazione personale è memorizzata all\'interno di questo cookie. Questo cookie è valido per un anno dopo il tuo ultimo accesso. </ p>
<p>Tieni presente che i log generali del server non sono influenzati dalla tua decisione di non essere nelle statistiche d\'uso. Si prega di fare riferimento alla nostra <a href="{$privacyStatementUrl}"> informativa sulla privacy </a>.</ p>',
  'plugins.reports.usageStats.metricType' => 'PKP/COUNTER',
  'plugins.reports.usageStats.metricType.full' => 'Statistiche PKP (conformi a COUNTER)',
  'plugins.generic.usageStats.statsSum' => 'Somma tutti i downloads',
  'plugins.generic.usageStats.noStats' => 'I dati di download non sono ancora disponibili.',
  'plugins.generic.usageStats.monthInitials' => 'Gen Feb Mar Apr Mag Giu Lug Ago Set Ott Nov Dic',
  'plugins.generic.usageStats.downloads' => 'Downloads',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.ojs2' => 'Ogni periodico può impostare i propri parametri nella pagina specifica del periodico medesimo.',
  'plugins.generic.usageStats.optout.description.long.ojs2' => '
		<h3>Informazioni generali sulla Privacy</h3>
		<p>Per favore fai riferimento alla nostra dichiarqazione sulla <a href="{$privacyStatementUrl}">privacy</a>.</p>
		<h3>Statistiche d\'uso</h3>
		<p>Per analizzare l\'uso e l\'impatto di ogni periodico e dei suoi articoli, vengo registrati i log di accesso alla home, ai fascicoli, agli articoli, ai file. Prima di essere lavorati tutti i dati sono resi anonimi. Nessuna informazione personale è registrata. Gli IP vengo resi anonimi tramti hash (usando <em>SHA 256</em>) in unione con un salt di 64 bit che è generato casualmente e sovrascritto ogni giorno. Pertanto gli IP address non possono essere ricostruiti.</p>
		<p>Le seguenti informazioni vengono raccolte:</p>
		<ul>
		<li>Tipo accesso (ad es. amministrativo)</li>
		<li>Data e orario richiesta URL</li>
		<li>URL richiesto</li>
		<li>Codice stato HTTP</li>
		<li>Browser</li>
		</ul>
		<p>I dati sono raccolti solo per fare valutazioni. Gli IP non sono collegati agli user ID. E\' tecnicamente impossibile collegare un set di dati con uno speficio IP.</p>',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.omp' => 'Ogni redazione può personalizzare i valori di questa configurazione.',
  'plugins.generic.usageStats.optout.description.long.omp' => '
		<h3>Informazioni generali sulla Privacy</h3>
		<p>Per favore fai riferimento alla nostra dichiarqazione sulla <a href="{$privacyStatementUrl}">privacy</a>.</p>
		<h3>Statistiche d\'uso</h3>
		<p>Per analizzare l\'uso e l\'impatto di ogni pubblicazione, vengo registrati i log di accesso alla home, alle categoria, alle serie, ai singoli libri e ai file. Prima di essere lavorati tutti i dati sono resi anonimi. Nessuna informazione personale è registrata. Gli IP vengo resi anonimi tramti hash (usando <em>SHA 256</em>) in unione con un salt di 64 bit che è generato casualmente e sovrascritto ogni giorno. Pertanto gli IP address non possono essere ricostruiti.</p>
		<p>Le seguenti informazioni vengono raccolte:</p>
		<ul>
		<li>Tipo accesso (ad es. amministrativo)</li>
		<li>Data e orario richiesta URL</li>
		<li>URL richiesto</li>
		<li>Codice stato HTTP</li>
		<li>Browser</li>
		</ul>
		<p>I dati sono raccolti solo per fare valutazioni. Gli IP non sono collegati agli user ID. E\' tecnicamente impossibile collegare un set di dati con uno speficio IP.</p>',
  'plugins.generic.usageStats.optout.description' => 'Informazioni sulla privacy per le statistiche di utilizzo',
  'plugins.generic.usageStats.optout.displayName' => 'Informazioni sulla privacy per le statistiche di utilizzo',
);