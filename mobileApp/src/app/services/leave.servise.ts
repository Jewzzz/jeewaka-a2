import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Leave } from '../leaves/leave.model';
import { HttpClient } from '@angular/common/http';



@Injectable({ providedIn: 'root' })

export class LeaveService {
  apiUrl = 'http://localhost:9000/api';
  constructor(private http: HttpClient){}

  getLeave(): Observable<Leave[]> {
    return this.http.get<Leave[]>(`${this.apiUrl}/leaves`);
  }

  addLeave(leave: Leave): Observable<Leave>{
    return this.http.post<Leave>(`${this.apiUrl}/leaves`, leave);
  }

  updateLeave(leaveId: number , leave: Leave): Observable<Leave>{
    return this.http.put<Leave>(`${this.apiUrl}/leaves/${leaveId}`, leave);
  }

  deleteProduct(leaveId: number): Observable<Leave>{
    return this.http.delete<Leave>(`${this.apiUrl}/leaves/${leaveId}`);
  }

}
