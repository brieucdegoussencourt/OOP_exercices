<?php

class Student {
    private string $name;
    private float $grade;

    public function __construct(string $name, float $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getGrade(): float {
        return $this->grade;
    }
}

class Group {
    private array $students;

    public function __construct(array $students = []) {
        $this->students = $students;
    }

    public function addStudent(Student $student): void {
        $this->students[] = $student;
    }

    public function removeStudent(Student $student): void {
        foreach ($this->students as $key => $s) {
            if ($s === $student) {
                unset($this->students[$key]);
                $this->students = array_values($this->students);
                break;
            }
        }
    }

    public function getAverageGrade(): float {
        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->getGrade();
        }
        return $total / count($this->students);
    }

    public function getTopStudent(): Student {
        $topStudent = $this->students[0];
        foreach ($this->students as $student) {
            if ($student->getGrade() > $topStudent->getGrade()) {
                $topStudent = $student;
            }
        }
        return $topStudent;
    }

    public function getLowestStudent(): Student {
        $lowestStudent = $this->students[0];
        foreach ($this->students as $student) {
            if ($student->getGrade() < $lowestStudent->getGrade()) {
                $lowestStudent = $student;
            }
        }
        return $lowestStudent;
    }
}

// Create students for both groups
$group1Students = [
    new Student("Alice", 85),
    new Student("Bob", 78),
    new Student("Charlie", 92),
    new Student("David", 88),
    new Student("Eve", 76),
    new Student("Frank", 90),
    new Student("Grace", 84),
    new Student("Heidi", 95),
    new Student("Ivan", 80),
    new Student("Judy", 82)
];

$group2Students = [
    new Student("Kathy", 70),
    new Student("Leo", 75),
    new Student("Mona", 68),
    new Student("Nina", 85),
    new Student("Oscar", 77),
    new Student("Paul", 73),
    new Student("Quinn", 80),
    new Student("Rita", 82),
    new Student("Steve", 79),
    new Student("Tom", 74)
];

// Create groups
$group1 = new Group($group1Students);
$group2 = new Group($group2Students);

// Display average scores
echo "Average score of Group 1: " . $group1->getAverageGrade() . "<br>";
echo "Average score of Group 2: " . $group2->getAverageGrade() . "<br>";

// Move top student from Group 1 to Group 2's lowest scoring student
$topStudentGroup1 = $group1->getTopStudent();
$lowestStudentGroup2 = $group2->getLowestStudent();

$group1->removeStudent($topStudentGroup1);
$group2->removeStudent($lowestStudentGroup2);

$group1->addStudent($lowestStudentGroup2);
$group2->addStudent($topStudentGroup1);

// Display average scores after moving students
echo "Average score of Group 1 after moving students: " . $group1->getAverageGrade() . "<br>";
echo "Average score of Group 2 after moving students: " . $group2->getAverageGrade() . "<br>";

?>