<?php
class Student
{
    private mysqli $connection;

    public function __construct(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function getAll(): mysqli_result
    {
        return $this->connection->query("SELECT id, name, email, phone FROM allstudents ORDER BY id");
    }

    public function getById(int $id): ?array
    {
        $statement = $this->connection->prepare("SELECT id, name, email, phone FROM allstudents WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        $student = $result->fetch_assoc() ?: null;
        $statement->close();

        return $student;
    }

    public function create(string $name, string $email, string $phone): bool
    {
        $statement = $this->connection->prepare("INSERT INTO allstudents (name, email, phone) VALUES (?, ?, ?)");
        $statement->bind_param("sss", $name, $email, $phone);
        $success = $statement->execute();
        $statement->close();

        return $success;
    }

    public function update(int $id, string $name, string $email, string $phone): bool
    {
        $statement = $this->connection->prepare("UPDATE allstudents SET name = ?, email = ?, phone = ? WHERE id = ?");
        $statement->bind_param("sssi", $name, $email, $phone, $id);
        $success = $statement->execute();
        $statement->close();

        return $success;
    }

    public function delete(int $id): bool
    {
        $statement = $this->connection->prepare("DELETE FROM allstudents WHERE id = ?");
        $statement->bind_param("i", $id);
        $success = $statement->execute();
        $statement->close();

        return $success;
    }
}