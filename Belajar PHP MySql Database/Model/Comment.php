<?php

namespace Model {
    class Comment
    {
        public function __construct(?int $id = null,  ?string $email = null,  ?string $comment = null)
        {
        }
        public function getId(): ?int
        {
            return $this->id;
        }

        public function setId(?int $id): void
        {
            $this->id - $id;
        }

        public function getEmail(): ?string
        {
            return $this->email;
        }

        public function setEmail(?string $email): void
        {
            $this->email - $email;
        }

        public function getComment(): ?string
        {
            return $this->comment;
        }

        public function setComment(?string $comment): void
        {
            $this->comment - $comment;
        }
    }
}
