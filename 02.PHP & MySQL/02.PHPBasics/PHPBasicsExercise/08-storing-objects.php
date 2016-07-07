<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Storing Objects</title>
</head>
<body>
    <form>
        Input: <textarea name="input"></textarea>
        Delimiter: <input type="text" name="delimiter" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    class Student
    {
        private $name;
        private $age;
        private $grade;

        public function __construct(string $name, int $age, float $grade)
        {
            $this->setName($name);
            $this->setAge($age);
            $this->setGrade($grade);
        }

        public function getName() : string
        {
            return $this->name;
        }

        public function setName(string $name)
        {
            $this->name = $name;
        }

        public function getAge() : int
        {
            return $this->age;
        }

        public function setAge(int $age)
        {
            $this->age = $age;
        }

        public function getGrade() : float
        {
            return $this->grade;
        }

        public function setGrade(float $grade)
        {
            $this->grade = $grade;
        }
    }

    if (isset($_GET['input']) && isset($_GET['delimiter'])) {
        $delimiter = $_GET['delimiter'];
        $lines = explode("\n", $_GET['input']);
        $lines = array_map("trim", $lines);
        $lines = array_filter($lines);
        $students = [];
        foreach ($lines as $line) {
            $tokens = explode($delimiter, $line);
            $name = $tokens[0];
            $age = intval($tokens[1]);
            $grade = floatval($tokens[2]);
            $newStudent = new Student($name, $age, $grade);
            $students[] = $newStudent;
        }

        foreach ($students as $student) {
            $studentName = $student->getName();
            $studentAge = $student->getAge();
            $studentGrade = $student->getGrade();
            echo "<ul>";
            echo "<li>Name: $studentName</li>";
            echo "<li>Age: $studentAge</li>";
            echo "<li>Grade: $studentGrade</li>";
            echo "</ul>";
        }
    }
    ?>
</body>
</html>