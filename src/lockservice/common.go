package lockservice

//
// RPC definitions for a simple lock service.
//

//
// Lock(lockname) returns OK=true if the lock is not held.
// If it is held, it returns OK=false immediately.
// 

type LockArgs struct {
  Lockname string  // lock name
}

type LockReply struct {
  OK bool
}

//
// Unlock(lockname) returns OK=true if the lock was held.
// It returns OK=false if the lock was not held.
//
type UnlockArgs struct {
  Lockname string
}

type UnlockReply struct {
  OK bool
}
