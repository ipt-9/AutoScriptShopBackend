<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Shipping_address;
use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use http\Env\Request;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datei-Backup-Automatisierung")->set(key:"body",value: "Ein Skript, das regelmäßig wichtige Dateien sichert und an einem sicheren Ort speichert. Es kann so konfiguriert werden, dass es zu bestimmten Zeiten läuft und alte Backups automatisch löscht, um Speicherplatz zu sparen.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "E-Mail-Benachrichtigungs-Skript")->set(key:"body",value: "Dieses Skript sendet automatisch E-Mail-Benachrichtigungen basierend auf vordefinierten Ereignissen oder Bedingungen. Ideal für Systemadministratoren, um über Fehler oder wichtige Ereignisse informiert zu werden.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Web-Scraping-Automat")->set(key:"body",value: "Ein Tool zur automatischen Extraktion von Daten von Webseiten. Dieses Skript kann regelmäßig ausgeführt werden, um aktuelle Informationen zu sammeln und in einer Datenbank oder einer CSV-Datei zu speichern.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datenbank-Wartungs-Tool")->set(key:"body",value: "Ein Skript zur Durchführung regelmäßiger Wartungsaufgaben an einer Datenbank, wie z.B. das Bereinigen veralteter Daten, Optimieren von Tabellen und Erstellen von Backups.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Berichterstellungs-Automatisierer")->set(key:"body",value: "Ein Skript, das automatisch Berichte aus verschiedenen Datenquellen generiert, formatiert und an die zuständigen Personen sendet. Es kann für tägliche, wöchentliche oder monatliche Berichte konfiguriert werden.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "System-Überwachungs-Skript")->set(key:"body",value: "Ein Skript zur Überwachung der Systemressourcen wie CPU, Speicher, Festplattennutzung und Netzwerkaktivitäten. Es kann Warnungen senden, wenn bestimmte Schwellenwerte überschritten werden.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Repetitive Aufgaben Automatisierer")->set(key:"body",value: "Ein Skript zur Automatisierung wiederkehrender Aufgaben, wie z.B. das Ausführen bestimmter Befehle, das Verschieben von Dateien oder das Starten/Stoppen von Diensten zu festgelegten Zeiten.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Benutzerverwaltung-Tool")->set(key:"body",value: "Ein Skript zur Verwaltung von Benutzerkonten in einem Netzwerk. Es kann Aufgaben wie das Erstellen, Aktualisieren und Löschen von Benutzerkonten sowie das Zuweisen von Berechtigungen automatisieren.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Log-Analyse-Skript")->set(key:"body",value: "Ein Skript zur automatischen Analyse von Logdateien. Es kann Fehler und Warnungen identifizieren, Berichte erstellen und Auffälligkeiten hervorheben, um die Fehlerbehebung zu erleichtern.")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datei-Umbenennungs-Automatisierer")->set(key:"body",value: "Ein Skript, das Dateien basierend auf bestimmten Regeln automatisch umbenennt. Ideal für die Organisation von großen Mengen an Dateien, z.B. das Hinzufügen von Zeitstempeln oder das Entfernen unerwünschter Zeichen aus Dateinamen.")->create();

        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Datei-Backup-Automatisierung")->set(key:"body",value: "Ein Skript, das regelmäßig wichtige Dateien sichert und an einem sicheren Ort speichert. Es kann so konfiguriert werden, dass es zu bestimmten Zeiten läuft und alte Backups automatisch löscht, um Speicherplatz zu sparen.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "E-Mail-Benachrichtigungs-Skript")->set(key:"body",value: "Dieses Skript sendet automatisch E-Mail-Benachrichtigungen basierend auf vordefinierten Ereignissen oder Bedingungen. Ideal für Systemadministratoren, um über Fehler oder wichtige Ereignisse informiert zu werden.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Web-Scraping-Automat")->set(key:"body",value: "Ein Tool zur automatischen Extraktion von Daten von Webseiten. Dieses Skript kann regelmäßig ausgeführt werden, um aktuelle Informationen zu sammeln und in einer Datenbank oder einer CSV-Datei zu speichern.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Datenbank-Wartungs-Tool")->set(key:"body",value: "Ein Skript zur Durchführung regelmäßiger Wartungsaufgaben an einer Datenbank, wie z.B. das Bereinigen veralteter Daten, Optimieren von Tabellen und Erstellen von Backups.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Berichterstellungs-Automatisierer")->set(key:"body",value: "Ein Skript, das automatisch Berichte aus verschiedenen Datenquellen generiert, formatiert und an die zuständigen Personen sendet. Es kann für tägliche, wöchentliche oder monatliche Berichte konfiguriert werden.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "System-Überwachungs-Skript")->set(key:"body",value: "Ein Skript zur Überwachung der Systemressourcen wie CPU, Speicher, Festplattennutzung und Netzwerkaktivitäten. Es kann Warnungen senden, wenn bestimmte Schwellenwerte überschritten werden.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Repetitive Aufgaben Automatisierer")->set(key:"body",value: "Ein Skript zur Automatisierung wiederkehrender Aufgaben, wie z.B. das Ausführen bestimmter Befehle, das Verschieben von Dateien oder das Starten/Stoppen von Diensten zu festgelegten Zeiten.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Benutzerverwaltung-Tool")->set(key:"body",value: "Ein Skript zur Verwaltung von Benutzerkonten in einem Netzwerk. Es kann Aufgaben wie das Erstellen, Aktualisieren und Löschen von Benutzerkonten sowie das Zuweisen von Berechtigungen automatisieren.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Log-Analyse-Skript")->set(key:"body",value: "Ein Skript zur automatischen Analyse von Logdateien. Es kann Fehler und Warnungen identifizieren, Berichte erstellen und Auffälligkeiten hervorheben, um die Fehlerbehebung zu erleichtern.")->create();
        Task::factory()->set(key:'owner_id', value: 1 )->set(key:"title",value: "Datei-Umbenennungs-Automatisierer")->set(key:"body",value: "Ein Skript, das Dateien basierend auf bestimmten Regeln automatisch umbenennt. Ideal für die Organisation von großen Mengen an Dateien, z.B. das Hinzufügen von Zeitstempeln oder das Entfernen unerwünschter Zeichen aus Dateinamen.")->create();


        User::factory()
            ->count(1)
            ->has(Product::factory()->count(10)->has(Picture::factory()->count(3))->has(Tag::factory()->count(4)->has(Product::factory()->set(key:'user_id', value: 1 ))))
            ->create();

        \App\Models\User::factory()->create([
            'username' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Tag::factory()
            ->count(1)->has(Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datei-Backup-Automatisierung")->set(key:"body",value: "Ein Skript, das regelmäßig wichtige Dateien sichert und an einem sicheren Ort speichert. Es kann so konfiguriert werden, dass es zu bestimmten Zeiten läuft und alte Backups automatisch löscht, um Speicherplatz zu sparen."))->create([ 'tag'=>"hello"]);

        User::factory()
            ->count(10)
            ->has(Task::factory())
            ->create();

        User::factory()
            ->count(10)
            ->has(Task::factory()->set(key:'worker_id', value: 1 )->set(key:"title",value: "Datei-Backup-Automatisierung")->set(key:"body",value: "Ein Skript, das regelmäßig wichtige Dateien sichert und an einem sicheren Ort speichert. Es kann so konfiguriert werden, dass es zu bestimmten Zeiten läuft und alte Backups automatisch löscht, um Speicherplatz zu sparen.")->has(Tag::factory()->count(2)))
            ->create();

        User::factory()
            ->count(10)
            ->has(Shipping_address::factory())
            ->create();




    }
}
