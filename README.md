# SOLID - Exemple avec PHP 7


## SOLID


_S :
**Single Responsibility Principle (Responsabilité unique)** - Une classe doit avoir une et une seule responsabilité.

_O :
**Open Closed Principle (Ouvert/fermé)** - Une classe doit être ouverte à l'extension, mais fermée à la modification.

_L :
**Liskov Substitution Principle (Substitution de Liskov)** - Une instance de type T doit pouvoir être remplacée par une instance de type G, tel que G sous-type de T, sans que cela ne modifie la cohérence du programme.

_I :
**Interface Segregation Principle (Ségrégation des interfaces)** - Préférer plusieurs interfaces spécifiques pour chaque client plutôt qu'une seule interface générale.

_D :
**Dependency Inversion Principle (Inversion des dépendances)** - Il faut dépendre des abstractions, pas des implémentations.






## Exemple 




### Single Responsibility Principle (Responsabilité unique) :

```php

<?php

class Article
{
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'Article Title';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Article Description';
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return '<p>Article Content</p>';
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return 'article-slug';
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'content' => $this->getContent(),
            'slug' => $this->getSlug(),
        ];
    }
}


interface FormatterInterface
{
    /**
     * @param Article $Article
     * @return string
     */
    public function format(Article $article): string; 
}


class JsonFormatter implements FormatterInterface
{
    /**
     * @param Article $article
     * @return string
     */
    public function format(Article $article): string
    {
        return json_encode($article->getAll());
    }
}


class XmlFormatter implements FormatterInterface
{
    /**
     * @param Article $article
     * @return string
     */
    public function format(Article $article): string
    {
        return xmlrpc_encode($article->getAll());
    }
}


// Run example :
$article = new Article();

$jsonFormatter = new JsonFormatter();

$xmlFormatter = new XmlFormatter();

var_dump($jsonFormatter->format($article));

var_dump($xmlFormatter->format($article));


```




### Open Closed Principle (Ouvert/fermé) :

```php

<?php

interface SportInterface
{
    /**
     * @return string
     */
    public function rules(): string;
}


class Football implements SportInterface
{
    /**
     * @return string
     */
    public function rules(): string
    {
        return 'Rules of Football...';
    }
}


class Basketball implements SportInterface
{
    /**
     * @return string
     */
    public function rules(): string
    {
        return 'Rules of Basketball...';
    }
}


class Sport
{
    /**
     * @return string
     */
    public function rules(SportInterface $sport): string
    {
        return $sport->rules();
    }
}


// Run example :
$football = new Football();

$basketball = new Basketball();

$sport = new Sport();

var_dump($sport->rules($football));

var_dump($sport->rules($basketball));

```




### Liskov Substitution Principle (Substitution de Liskov) :

```php

<?php

abstract class Quadrilateral
{
    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $width;

    /**
     * @param int $width
     * @param int $height
     */
    abstract public function resize(int $width, int $height);
    
    /**
     * @param int $value
     */
    public function setWidth(int $value)
    {
        $this->width = $value;
    }
    
    /**
     * @param int $value
     */
    public function setHeight(int $value)
    {
        $this->height = $value;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
    
    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}


class Rectangle extends Quadrilateral
{
    /**
     * @param int $width
     * @param int $height
     */
    public function resize(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}


class Square extends Quadrilateral
{
    /**
     * @param int $width
     * @param int $height
     */
    public function resize(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}


class Graphic
{
    /**
     * @param Quadrilateral $quadrilateral
     * @param int $percentage
     */
    public function resizeByPercentage(Quadrilateral $quadrilateral, int $percentage)
    {
        if ($percentage === 0) {
            $quadrilateral->resize(0, 0);
        } else {
            $quadrilateral->resize(
                $quadrilateral->getWidth() + ($quadrilateral->getWidth() * $percentage / 100),
                $quadrilateral->getHeight() + ($quadrilateral->getHeight() * $percentage / 100)
            );
        }
    }
}


// Run example :
$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);

$square = new Square();
$square->setWidth(4);
$square->setHeight(4);

var_dump($rectangle->getWidth());
var_dump($rectangle->getHeight());

var_dump($square->getWidth());
var_dump($square->getHeight());

$graphic = new Graphic();
$graphic->resizeByPercentage($rectangle, 25);
$graphic->resizeByPercentage($square, 25);

var_dump($rectangle->getWidth());
var_dump($rectangle->getHeight());

var_dump($square->getWidth());
var_dump($square->getHeight());

```




### Interface Segregation Principle (Ségrégation des interfaces) :

```php

<?php

interface JobInterface
{
    /**
     * @return string
     */
    public function job(): string;

    /**
     * @return string
     */
    public function action(): string;
}


interface CodeInterface extends JobInterface
{
    /**
     * @return string
     */
    public function coding(): string;
}


interface DesignInterface extends JobInterface
{
    /**
     * @return string
     */
    public function designate(): string;
}


class Developer implements CodeInterface
{
    /**
     * @return string
     */
    public function job(): string
    {
        return 'Developer';
    }

    /**
     * @return string
     */
    public function coding(): string
    {
        return 'Coding';
    }

    /**
     * @return string
     */
    public function action(): string
    {
        return 'The '.$this->job().' '.$this->coding();
    }
}


class Webdesigner implements DesignInterface
{
    /**
     * @return string
     */
    public function job(): string
    {
        return 'Webdesigner';
    }

    /**
     * @return string
     */
    public function designate(): string
    {
        return 'Designate';
    }

    /**
     * @return string
     */
    public function action(): string
    {
        return 'The '.$this->job().' '.$this->designate();
    }
}


class Employee
{
    /**
     * @param JobInterface $job
     * @return string
     */
    public function action(JobInterface $job): string
    {
        return $job->action();  
    }
}


// Run example :
$developer = new Developer();

$webdesigner = new Webdesigner();

$employee = new Employee();

var_dump($employee->action($developer));
var_dump($employee->action($webdesigner));

```




### Dependency Inversion Principle (Inversion des dépendances) :

```php

<?php

interface MailerInterface
{
    /**
     * @return bool
     */
    public function send(): bool;

    /**
     * @return string
     */
    public function confirmmationMessage(): string;

    /**
     * @return string
     */
    public function errorMessage(): string;
}


class SwiftMailer implements MailerInterface
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function confirmmationMessage(): string
    {
        return 'The message has been sent with SwiftMailer';
    }

    /**
     * @return string
     */
    public function errorMessage(): string
    {
        return 'An error occurred with the attempt of sending of the message with SwiftMailer';
    }
}


class PHPMailer implements MailerInterface
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function confirmmationMessage(): string
    {
        return 'The message has been sent with PHPMailer';
    }

    /**
     * @return string
     */
    public function errorMessage(): string
    {
        return 'An error occurred with the attempt of sending of the message with PHPMailer';
    }
}


class SendMail
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     *  @param MailerInterface $mailer
     */
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @return string
     */
    public function sendMessage(): string
    {
        if ($this->mailer->send()) {
            return $this->mailer->confirmmationMessage();
        }
        
        return $this->mailer->errorMessage();
    }
}


// Run example :
$swiftMailer = new SwiftMailer();

$phpMailer = new PHPMailer();

$sendMail = new SendMail($swiftMailer);
var_dump($sendMail->sendMessage());

$sendMail = new SendMail($phpMailer);
var_dump($sendMail->sendMessage());

```






## Author

Author of this example:
[Développeur PHP de Grenoble](https://www.devandweb.fr)